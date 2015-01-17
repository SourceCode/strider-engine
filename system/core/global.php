<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base Globals class
*/
class Globals extends DataStore
{
    use Singleton;
    
    /**
    * The application filepath
    */
    private static $filePath = '';
    
    /**
    * The application webpath
    */
    private static $webPath = '';
    
    /**
    * Contains the get superglobal
    */
    private static $get = array();
    
    /**
    * Contains the post superglobal
    */
    private static $post = array();
    
    /**
    * Contains the reqest superglobal
    */
    private static $request = array();
    
    /**
    * Contains the files superglobal
    */
    private static $files = array();
    
    /**
    * Constructs the object setting its properties.
    */
    public function __construct()
    {
        self::$filePath = Config::$filePath;
        self::$webPath = Config::$webPath;
        self::$url =& self::$webPath;
        if (isset($_GET)) self::$get = $_GET;    
        if (isset($_POST)) self::$post = $_POST;    
        if (isset($_REQUEST)) self::$request = $_REQUEST;    
        if (isset($_FILES)) self::$files = $_FILES;
        self::setGlobal('URL', Config::$webPath);
        self::setGlobal('appTitle', Config::$projectName); 
    }
    
    /**
    * Returns the URL of the application
    * @return string Returns the URL
    */
    public static function url()
    {
        return self::url;    
    }
    
    /**
    * Returns the webpath of the application
    * @return string Returns the webpath
    */
    public static function webpath()
    {
        return self::webpath();
    }
    
    /**
    * Returns the filepath of the application
    * @return string Returns the filepath
    */
    public static function filepath()
    {
        return self::filepath();
    }
    
    /**
    * Returns the get superglobal
    * @return string Returns the get superglobal
    */
    public static function get()
    {
        return self::get();
    }
    
    /**
    * Returns the post superglobal
    * @return string Returns the post superglobal
    */
    public static function post()
    {
        return self::post;
    }
    
    /**
    * Returns the request superglobal
    * @return string Returns the request superglobal
    */
    public static function request()
    {
        return self::request;
    }
    
    /**
    * Returns the files superglobal
    * @return string Returns the files superglobal
    */
    public static function files()
    {
        return self::files();
    }

    /**
    * Returns the Globals object values as an array
    * @return array Returns the objects values rendered as an array
    */
    public static function toArray()
    {
        $array = array();
        $array = self::$dataStore;
        $array['filepath'] = self::filepath();
        $array['webpath'] = self::webpath();
        $array['get'] = self::get();
        $array['post'] = self::post();
        $array['request'] = self::request();
        $array['files'] = self::files();
        return $array;
    }
}