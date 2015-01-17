<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base Config class
*/
class Config
{
    use Singleton;
    
    /**
    * The name for the project
    */
    public static $projectName = '';
    
    /**
    * The file type used for the twig template engine 
    */
    public static $viewFileType = 'twig';
    
    /**
    * The webpath for the application
    */
    public static $webPath = 'http://localhost/strider-engine/';
    
    /**
    * The filepath for the application
    */  
    public static $filePath = 'C:/wamp/www/strider-engine/';
    
    /**
    * The directory apps are stored within
    */  
    public static $appStorage = 'app/';
    
    /**
    * The directory app models are stored within
    */ 
    public static $modelStorage = 'model/';
    
    /**
    * The directory app views are stored within
    */ 
    public static $viewStorage = 'view/';
    
    /**
    * The directory app controllers are stored within
    */ 
    public static $controllerStorage = 'controller/';
    
    /**
    * Controls the debug mode for the application
    */ 
    public static $debugMode = true;
    
    /**
    * Controls the salt used in hashing
    */ 
    public static $salt = '#!S8123T123RI12312DE12RXNK!~';
    
    /**
    * Controls the adapter for the ORM
    */ 
    public static $dbAdapter = 'mysql';
    
    /**
    * Database Host
    */ 
    public static $dbHost = '';
    
    /**
    * Database User
    */ 
    public static $dbUser = '';
    
    /**
    * Database Password
    */ 
    public static $dbPass = '';
    
    /**
    * Database Database
    */ 
    public static $dbDatabase = '';
    
    /**
    * SMTP Host
    */ 
    public static $smtpHost = '';
    
    /**
    * SMTP Port
    */ 
    public static $smtpPort = '';
    
    /**
    * SMTP From
    */ 
    public static $smtpFrom = '';
    
    /**
    * SMTP User
    */ 
    public static $smtpUser = '';
    
    /**
    * SMTP Password
    */ 
    public static $smtpPass = '';
    
    /**
    * SMTP SSL Option
    */ 
    public static $smtpSSL = '';
    
    /**
    * System File Storage
    */ 
    public static $fileStorage = '';
    
    /**
    * System Log Storage
    */ 
    public static $logStorage = '';
    
    /**
    * System Timezone
    */ 
    public static $timezone = '';
    
    /**
    * Default PHP Date Time Format
    */ 
    public static $phpDateTimeFormat = '';
    
    /**
    * Default PHP Date Format
    */ 
    public static $phpDateFormat = '';
    
    /**
    * Default MySQL Date Time Format
    */ 
    public static $mysqlDataTimeFormat = '';
    
    /**
    * Default MySQL Date Format
    */ 
    public static $mysqlDateFormat = '';
    
    /**
    * Pagination Items
    */ 
    public static $paginationItems = 25;
}