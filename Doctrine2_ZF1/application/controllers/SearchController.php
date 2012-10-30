<?php

//use Doctrine\ODM\MongoDB\DocumentRepository as DocumentRepositoryAbstract;

class DocumentRepository
extends DocumentRepositoryAbstract
implements \Application_Grid_Model_Interface
{
	/**
	 * Return a Zend_Db_Select object
	 * useful to get grid data
	 * according to passed params
	 *
	 * @param array $params
	 * @return Zend_Db_Select|Zend_Db_Table_Rowset
	 */
	public function fetchGridData($params = array())
	{
		$start = isset($params['start']) ? $params['start'] : 0;
		$countPerPage = isset($params['countPerPage']) ? $params['countPerPage'] : 10;


		$select = $this->dm->createQueryBuilder($this->getDocumentName())
		->limit($countPerPage)
		->skip($start);

		 
		if(isset($params['sort-field']) &&
		array_key_exists('sort-value', $params)) {
			$field = $params['sort-field'];
			$field = !is_array($field) && !is_object($field) ? array($field) : (array) $field;
			$value = $params['sort-value'];
			$value = !is_array($value) && !is_object($value) ? array($value) : (array) $value;

			if(count($field) == count($value)) {
				foreach($field AS $k => $v) {
					//  $select->add('orderBy', 'a.' . $v . ' ' . $value[$k], true);
					$select->sort($value[$k], 'desc');
				}
			}
		}
		$query = $select->getQuery();

		if(isset($params['returnSelect']) && true === $params['returnSelect']) {
			return $query;
		}
		 
		return $query->execute();
	}

	/**
	 * Return only uniques values according to params.
	 * This is used for autocomplete.
	 *
	 * @param array $params
	 * @return array
	 */
	public function fetchGridUniqueValues($params)
	{
		$select = $this->dm->createQueryBuilder($this->getDocumentName());   // si deve configurare qua il document manager si puo prendere dal bootstrap

		 
		$field = isset($params['field']) && is_array($params['field']) ? $params['field'] : array($params['field']);
		$value = isset($params['value']) && is_array($params['value']) ? $params['value'] : array($params['value']);

		$f = array_pop($field);
		$v = array_pop($value);

		// Qui devi inserire nella query di estrarre solo il campo $f

		//   $select->select('a.' . $f);
		//   $select->distinct(true);
		//   $select->from($this->getEntityName(), 'a');

		//        $select->add('where', 'a.' . $f . ' LIKE :value', true);
		//        $select->setParameter('value', $v . '%');
		// Nome parametro per binding
		$paramName = '';
		foreach($field AS $x => $y) {
			$paramName = 'param' . $x;

			// Get logical operator
			$logical = null;
			if(isset($params['op-field']) &&
					array_key_exists('op-value', $params)) {
				$opField = $params['op-field'];
				$opField = !is_array($opField) && !is_object($opField) ? array($opField) : (array) $opField;
				$opValue = $params['op-value'];
				$opValue = !is_array($opValue) && !is_object($opValue) ? array($opValue) : (array) $opValue;

				if(count($opField) == count($opValue)) {
					foreach($opField AS $ok => $ov) {
						if($y == $ov) {
							$logical = isset($opValue[$ok]) ? $opValue[$ok] : null;
							break;
						}
					}
				}
			}

			switch($logical) {
				case 'MAG':
					$select->field($y)->gt($value[$x]);
					//$select->addAnd($select->expr()->gt('a.' . $v, ':' . $paramName));
					//$select->add('where', 'a.' . $v . ' > :logical', true);
					break;
				case 'MIN':
					$select->field($y)->lt($value[$x]);
					//$select->addAnd($select->expr()->lt('a.' . $v, ':' . $paramName));
					//$select->add('where', 'a.' . $v . ' < :logical', true);
					break;
				case 'NOT':
					$select->field($y)->notEqual($value[$x]);
					//  $select->addAnd($select->expr()->neq('a.' . $v, ':' . $paramName));
					//$select->add('where', 'a.' . $v . ' != :logical', true);
					break;
				case 'EQU':
				default:
					$select->field($y)->equals($value[$x]);
					//$select->addAnd($select->expr()->eq('a.' . $v, ':' . $paramName));
					//$select->add('where', 'a.' . $v . ' = :logical', true);
					break;
			}
			//   $select->setParameter($paramName, $value[$x]);
		}

		//$result = new Collections\ArrayCollection($query->execute());
		$query = $select->getQuery();
		$results = $query->getSingleResult();


		return $results;
	}
}