<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;
use Propel\Runtime\Propel;
use Propel\Runtime\Connection;
use Propel\Runtime\Connection\ConnectionManagerSingle;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/*
 * Configure Propel 2
 */
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
if (Config::$debugMode == true)
{
    $defaultLogger = new Logger('propelLogger');
    $defaultLogger->pushHandler(new StreamHandler(Config::$filePath . Config::$logStorage . 'propel-' . date('Ymd') . '.log', Logger::WARNING));
    $serviceContainer->setLogger('propelLogger', $defaultLogger);
}

$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass(Config::$dbDatabase, Config::$dbAdapter);
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
    'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
    'dsn' => 'mysql:host=' . Config::$dbHost . ';dbname=' . Config::$dbDatabase,
    'user' => Config::$dbUser,
    'password' => Config::$dbPass,
));
   
// Configure Propel 2.0 Connection Manager
$manager->setName(Config::$dbDatabase);
$serviceContainer->setConnectionManager(Config::$dbDatabase, $manager);
$serviceContainer->setDefaultDatasource(Config::$dbDatabase);