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
    * Contains the current requested app from the URL
    */
    private static $app = '';
    
    /**
    * Contains the current requested controller from the URL
    */
    private static $controller = '';
    
    /**
    * Contains the current requested module from the URL
    */
    private static $module;
    
    /**
    * CContains the current parameters from the URL
    */
    private static $parm = array();
    
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
        self::setValue('URL', Config::$webPath);
        self::setValue('appTitle', Config::$projectName);
        self::parseUrl(); 
    }
    
    /**
    * Parse URL into app, controller, module, and 9 acceptable URL parameter slots.
    * Additional parameters should be consider for placement into session or ajax/web service call.
    */
    private static function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            self::$app = (isset($url[0]) ? $url[0] : null);
            self::$controller = (isset($url[1]) ? $url[1] : null);
            self::$module = (isset($url[2]) ? $url[2] : null);
            self::$parm[1] = (isset($url[3]) ? $url[3] : null);
            self::$parm[2] = (isset($url[4]) ? $url[4] : null);
            self::$parm[3] = (isset($url[5]) ? $url[5] : null);
            self::$parm[4] = (isset($url[6]) ? $url[6] : null);
            self::$parm[5] = (isset($url[7]) ? $url[7] : null);
            self::$parm[6] = (isset($url[8]) ? $url[8] : null);
            self::$parm[7] = (isset($url[9]) ? $url[9] : null);
            self::$parm[8] = (isset($url[10]) ? $url[10] : null);
            self::$parm[9] = (isset($url[11]) ? $url[11] : null);
        }
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
        return self::files;
    }
    
    /**
    * Returns the current requested app
    * @return string Returns the current requested app
    */
    public static function app()
    {
        return self::app;
    }
    
    /**
    * Returns the current requested controller
    * @return string Returns the current requested controller
    */
    public static function controller()
    {
        return self::controller;
    }
    
    /**
    * Returns the current requested module
    * @return string Returns the current requested module
    */
    public static function module()
    {
        return self::module;
    }
    
    /**
    * Returns the current requested parameters
    * @return array Returns the current requested parameters
    */
    public static function parm()
    {
        return self::parm;
    }
    
    /**
    * Get parameter
    * @return array|null Returns the requested paramter by key or null if nothing found
    */
    public static function getParm($key)
    {
        if (is_numeric($key) && isset($parm[$key])) return self::parm[$key];
        return null;
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
        $array['app'] = self::app();
        $array['controller'] = self::controller();
        $array['module'] = self::module();
        $array['parm'] = self::parm();
        return $array;
    }
}