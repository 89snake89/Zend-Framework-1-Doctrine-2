<?php

use Application\Documents\User as User;

use Doctrine\ODM\MongoDB\Tools\DocumentGenerator;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\ClassLoader;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Doctrine\Common\Annotations\AnnotationRegistry;
/**
 * 
 * @author Fabio
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype(){
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->doctype('XHTML1_STRICT');
	}
	
	protected function _initDoctrineORM(){
		require '../vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php';
		//Doctrine\ORM\Tools\Setup::registerAutoloadPEAR();
		$paths = array(dirname(__DIR__)."/../library/Application/Entities");
		$isDevMode = false;
		$classLoader = new \Doctrine\Common\ClassLoader('Application');
		$classLoader->register();
		// the connection configuration
		$dbParams = array(
				'driver'   => 'pdo_mysql',
				'user'     => 'root',
				'password' => '',
				'dbname'   => 'dbdoctrine',
				'host' => 'localhost'
		);
		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
		$cache = new ArrayCache(); //Use ArrayCache in development
		//$cache = new ApcCache(); //Use ApcCache in production
		$config->setMetadataCacheImpl($cache);
		$driverImpl = $config->newDefaultAnnotationDriver("/../library/Application/Entities");
		$config->setMetadataDriverImpl($driverImpl);
		$config->setQueryCacheImpl($cache);
		$config->setProxyDir('application/proxies');
		$config->setProxyNamespace('application/proxies');
		$config->setAutoGenerateProxyClasses(true);
		$config->setAutoGenerateProxyClasses(true);
		$em = EntityManager::create($dbParams, $config);
		Zend_Registry::set('DoctrineEntityManager', $em);
	}
	/**
	 * Function that inid Doctrine ODM 
	 */
	protected function _initDoctrineODM(){
		
		AnnotationRegistry::registerFile("../vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Mapping/Annotations/Document.php");
		AnnotationDriver::registerAnnotationClasses();
		
		$config = new Configuration();		
		$db = new Mongo("mongodb://localhost:27017");
		$db->selectCollection('local', 'log');
		$connection = new Connection($db);
		$reader = new AnnotationReader();
		//$config->setMetadataDriverImpl(new AnnotationDriver($reader, __DIR__ . '/../library/Application/Documents'));
		
		$connection->selectCollection('local', 'log');
		$config->setProxyDir(APPLICATION_PATH . '/data/doctrine/proxies');
		$config->setProxyNamespace('Proxies');
		$config->setHydratorDir(APPLICATION_PATH . '/data/doctrine/hydrators');
		$config->setHydratorNamespace('Hydrators');
		$config->setMetadataDriverImpl(AnnotationDriver::create('/../library/Application/Documents'));

		$driver = $config->newDefaultAnnotationDriver(array('/../library/Application/Documents'));
		$config->setMetadataDriverImpl($driver);
		$dm = DocumentManager::create($connection, $config);
		/**
		 * Set in Zend Registry the Document Manager
		 */
		Zend_Registry::set('DoctrineDocumentManager', $dm);
	}
}

