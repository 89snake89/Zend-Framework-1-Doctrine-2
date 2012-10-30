<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
 	realpath(APPLICATION_PATH . '/../library/Application'),
	realpath(APPLICATION_PATH . '/../vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB'),
	realpath(APPLICATION_PATH . '/../vendor/doctrine/mongodb/lib/Doctrine/MongoDB/'),
	realpath(APPLICATION_PATH . '/../vendor/doctrine/dbal/lib/Doctrine/DBAL/'),
	realpath(APPLICATION_PATH . '/../vendor/doctrine/common/lib/Doctrine/Common/'),
	realpath(APPLICATION_PATH . '/../vendor/doctrine/orm/lib/Doctrine/ORM/'),
    realpath(APPLICATION_PATH . '/../vendor/zendframework/zendframework1/library/Zend'),
    get_include_path(),
)));

/** Zend_Application */
//require_once 'Zend/Application.php';
require_once dirname(__FILE__) . '/../vendor/autoload.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();