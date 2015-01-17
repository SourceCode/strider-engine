<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * Singleton Trait for Strider 
 */
trait Singleton
{
    /**
    * Contains the current instance of the object 
    */
    protected static $instance;
    
    /**
    * Returns the instance of the current object
    */
    final public static function getInstance()
    {
        return isset(static::$instance)
            ? static::$instance
            : static::$instance = new static;
    }
    
    /**
    * On construct runs the init method of the current object
    */
    final private function __construct() {
        $this->init();
    }
    
    /**
    * The init method of the object
    */
    protected function init() {}
    final private function __wakeup() {}
    final private function __clone() {}    
}
?>
