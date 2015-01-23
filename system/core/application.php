<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/*
 * Includes the Autoloader and required
 */
require_once("vendor/autoload.php");
require_once("system/trait/singleton.php");

/*
 * Autoload Traits, Abstract Classes, and Interfaces
 */
foreach (glob(Config::$filePath . "system/trait/*.php") as $trait) require_once $trait;
foreach (glob(Config::$filePath . "system/abstract/*.php") as $abstract) require_once $abstract;
foreach (glob(Config::$filePath . "system/interface/*.php") as $interface) require_once $interface;

/*
 * Setup Debugging
 */
if (Config::$debugMode == true)
{
    error_reporting(E_ALL);
    $connector = \PhpConsole\Connector::getInstance();
    $handler = \PhpConsole\Handler::getInstance();

    $handler->start(); // initialize handlers
    \PhpConsole\Helper::register();
    
    /**
    * Set global dBug function for phpconsole.
    */
    require_once(Config::$filePath . 'system/ext/dbug.php');
    
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    
    /*
    * Sets debug in globals to true 
    */
    Globals::setValue('debug', true);
}


/*
 * Run the Application via the Strider Controller
 */
$controller = new Controller();
$controller->route();

?>