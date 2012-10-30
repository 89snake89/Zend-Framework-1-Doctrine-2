<?php

use Doctrine\ORM\Tools\Export\Driver\XmlExporter;

use Application\Entities\User as User;
use Application\Documents\LogMongo as LogMongo;
use Application\Documents\User as UserMongo;
use Application\Documents\BlogPost as BlogPost;

use Application\Entities;

use Doctrine\ORM\Tools\SchemaValidator;
use Doctrine\Common\Cache\ApcCache;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class IndexController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function indexAction()
    {
    	$em = Zend_Registry::get('DoctrineEntityManager');
        
    	$user = new User();
    	$user->setName('Silvia');
    	$user->setSurname('Chiappalone');
    	$user->setSex("F");
    	$user->setCity('Milano');
    	$em->persist($user);
		
    	$em->flush();
    	/*
    	 * Create query with query builder, this query get all user that have sex = M
    	$qb = $em->createQueryBuilder();
    	$qb->select('u')
    	    ->from('Application\Entities\User','u')
    	    ->where("u.sex = 'M'")
    		->orderBy('u.name', 'ASC');
    	$query = $qb->getQuery();
    	//Execute query
    	$result = $query->getResult();
    	foreach ($result as $row){
    		Zend_Debug::dump($row);
    		echo $row->getName();
    	}
    	Zend_Debug::dump($result);
    	*/
    	$user = new UserMongo();
    	$user->setName('Valentina');
    	$user->setEmail('valentina@valentina.it');
    	$post1 = new BlogPost();
    	$post1->setBody('uhuhrfgsfuhuio');
    	$post1->setTitle('Title2');
    	
    	$user->addPosts($post1);
    	
    	$post2 = new BlogPost();
    	$post2->setBody('gdgdrg222');
    	$post2->setTitle('Tieregetleer2');
    	$user->addPosts($post2);
    	
    	$dm = Zend_Registry::get('DoctrineDocumentManager');
    	$dm->persist($user);
    	$dm->flush();
    	
    }
    
    public function searchAction() {
    	$dm = Zend_Registry::get('DoctrineDocumentManager');
    	//echo "<h1>Document Manager </h1>";
    	//Zend_Debug::dump($dm);
    	$log = new LogMongo();
    	$select = $dm->createQueryBuilder('Application\Documents\LogMongo');
    	//Zend_Debug::dump($select->find('Application\Documents\LogMongo'));
    	$risultato = $select->field('user_code')->equals("ENI")->sort("log_title", "asc");
    	//die("ciao");
    	//$risultato = $select->distinct("log_title");
    	$query = $risultato->getQuery()->execute();
    	
    	foreach ($query as $row){
    		Zend_Debug::dump($row);
    	}
    	
    }
    
}

