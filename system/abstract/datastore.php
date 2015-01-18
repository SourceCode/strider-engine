<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base datastore abstract class
*/
abstract class DataStore
{
    /**
    * Stores the template data
    */
    protected static $dataStore = array();
    
    /**
    * Sets a template value
    * @param $key The key to return the value for
    * @return mixed|null Returns mixed value type, null if nothing found.
    */
    public static function getValue($key)
    {
        if (isset(self::$dataStore[$key])) return self::$dataStore[$key];
        return null;  
    }
    
    /**
    * Sets a template value
    * @param $key The key for the value to be added
    * @param $value The value set for the key
    * @return bool Returns true on completion
    */
    public static function setValue($key, $value)
    {
        self::$dataStore[$key] = $value;
        return true;    
    }
}
?>