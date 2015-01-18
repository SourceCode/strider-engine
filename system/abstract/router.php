<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base router abstract class
*/
abstract class Router
{    
    /**
    * Requires route method for concrete classes
    */
    abstract public function route();
    
    /** 
     * Call a method dynamically 
     * 
     * @param string $method 
     * @param array $args 
     * @return mixed 
     */ 
    public function __call($method, $args) 
    { 
        if(method_exists($this, $method)) { 
          return call_user_func_array(array($this, $method), $args); 
        }else{ 
            $this->route404(); 
        } 
    }
    
    private function route404()
    {
        if (\Strider\Config::$debugMode == false) throw new \Exception('Invalid Routing: Class Method Does Not Exist');
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        require_once("system/404.php");
        die();    
    }
    
}
?>