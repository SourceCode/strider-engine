<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The base Template class
 */
class Template extends DataStore
{
    use Singleton;
    
    /**
    * Stores JavaScript includes for the template system
    */
    private static $jsIncludes = array();
    
    /**
    * Stores CSS includes for the template system
    */
    private static $cssIncludes = array();
    

    
    /**
    * Checks if a value exists
    * @param string $key The key to check for existance
    * @return bool Returns true if the value exists, false if not
    */
    public static function existValue($key)
    {
        if (isset(self::$dataStore[$key])) return true;
        return false;    
    }
    
    /**
    * Adds a JavaScript file to the JavaScript file list
    * @param $file Adds a file to the JavaScript include list
    * @return bool Returns true if file was added, false if not
    */
    public static function addJs($file)
    {
        if (!in_array($file, self::$jsIncludes))
        {
            self::$jsIncludes[] = $file;    
            return true;    
        }
        return false;    
    }
    
    /**
    * Adds a CSS file to the CSS file list
    * @param $file Adds a file to the CSS include list
    * @return bool Returns true if file was added, false if not
    */
    public static function addCSS($file)
    {
        if (!in_array($file, self::$cssIncludes))
        {
            self::$cssIncludes[] = $file;    
            return true;    
        }
        return false;  
    }
    
    /**
    * Returns the JavaScript include list as injectable HTML
    * @return string|null Returns a HTML rendered include list or null if no includes exist
    */
    public static function getJs()
    {
        $jsFiles = '';
        if (is_array(self::$jsIncludes))
        {
            foreach(self::$jsIncludes as $js)
            {
                $jsList .= '<script type="text/javascript" src="' . $js . '"></script>' . "\r\n";
            }
            return $jsList;
        }
        return null;
    }
    
    /**
    * Returns the CSS include list as injectable HTML
    * @return string|null Returns a HTML rendered include list or null if no includes exist
    */
    public static function getCSS()
    {
        $cssList = '';
        if (is_array(self::$cssIncludes))
        {
            foreach(self::$cssIncludes as $css)
            {
                $cssList .= '<script type="text/javascript" src="' . $css . '"></script>' . "\r\n";
            }
            return $cssList;
        }
        return null;
    }
    
    /**
    * Returns the Template object values as an array
    * @return array Returns the objects values rendered as an array
    */
    public static function toArray()
    {
        $array = array();
        $array = self::$dataStore;
        $array['jsIncludes'] = self::$jsIncludes;
        $array['cssIncludes'] = self::$cssIncludes;
        return $array;
    }
}
?>
