<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The base Debug class
 */
class Debug
{
    use Singleton;
    
    /** 
    * Prints a variable to the stdout.
    * @param mixed $var The variable to be printed to stdout.
    */
    public static function p($var) 
    {
        if (is_string($var) || is_numeric($var) || is_float($var) || is_long($var)) {
            echo $var;
        } elseif (is_array($var)){
            echo '<pre>' . print_r($var, true) . '</pre>';
        } elseif (is_bool($var)) {
            if ($var==true) { echo 'false'; } else { echo 'true'; }
        } elseif (is_object) {
            echo '<pre>' . print_r($var, true) . '</pre>';
        } else {
            echo $var;
        }
    }

    /** 
    * Prints the provided variables type to stdout.
    * @param mixed $checkVar The variable to have its type checked.
    */
    public static function t($checkVar) 
    {
        if (isset($checkVar)) {
            $varType = gettype($checkVar);
            echo '<br />Value type is: ' . $varType . '<br />';
        } else {
            return false;
        }
    }

    /** 
    * Prints detils about a supplied object to stdout.
    * @param object $object The object to have its details printed out to stdout.
    */
    public static function o($object) 
    {
        if (is_object($object)) {
            $this->classType($object);
            $this->classParent($object);
            $this->properties($object);
            $this->methods($object);
        } else {
            return false;
        }
    }
    
    /** 
    * Prints a list of currently active objects to stdout.
    */
    public static function objList() 
    {
        echo '<h2>Object List</h2>';
        $objArray = get_declared_classes();
            $this->p($objArray);
    }

    /** 
    * Prints a list of currently included files to stdout.
    */
    public static function includeList() 
    {
        echo '<h2>Include List</h2>';
        $includeArray = get_included_files();
            $this->p($includeArray);
    }

    /** 
    * Prints information about the current active objects and the included files to sdtout.
    */
    public static function dump()
    {
        $this->objList();
        $this->includeList();
    }

    /** 
    * Prints detils about a supplied objects class to sdtout.
    * @param object $object The object to have its class type checked.
    */
    public static function classType($object)
    {
        if (is_object($object)) {
            $classType = get_class($object);
                echo '<h2>Object Type</h2>';
                $this->p($classType);
        } else {
            return false;
        }
    }

    /** 
    * Prints detils about a supplied objects properties to sdtout.
    * @param object $object The object to have its properties checked.
    */
    public static function properties($object)
    {
        if (is_object($object)) {
            $objArray = get_object_vars($object);
                echo '<h2>Object Properties</h2>';
                $this->p($objArray);
        } else {
            return false;
        }
    }

    /** 
    * Prints detils about a supplied objects methods to sdtout.
    * @param object $object The object to have its methods checked.
    */
    public static function methods($object)
    {
        if (is_object($object)) {
            $objArray = get_class_methods($object);
                echo '<h2>Object Methods</h2>';
                $this->p($objArray);
        } else {
            return false;
        }
    }

    /** 
    * Prints detils about a supplied objects parent class to sdtout.
    * @param object $object The object to have its parent class checked.
    */
    public static function classParent($object)
    {
        if (is_object($object)) {
            $parentClass = get_parent_class($object);
                echo '<h2>Object Parent</h2>';
                $this->p($parentClass);
        } else {
            return false;
        }
    }
}