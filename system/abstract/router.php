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
    * This list of routes for the router
    */
    private $routes;
    
    /**
    * Requires route method for concrete classes
    */
    abstract public function route();
    
    /** 
    * Call a method dynamically 
    * @param string $method 
    * @param array $args 
    * @return mixed Will return a boolean if the method exists and then calls it passing its arguments otherwise it will route404 
    */ 
    public function __call($method, $args) 
    { 
        if(method_exists($this, $method)) { 
          return call_user_func_array(array($this, $method), $args); 
        }else{ 
            $this->route404(); 
        } 
    }
    
    /** 
    * Routes to the application 404 page
    */ 
    private function route404()
    {
        if (\Strider\Config::$debugMode == false) throw new \Exception('Invalid Routing: Class Method Does Not Exist');
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        require_once("system/404.php");
        die();    
    }
    
    /** 
    * Sets the route list of acceptable registered routes
    * @param array $routes A list of acceptable routes that are a 1:1 map to calls on the controller class
    */ 
    private function setRoutes($routes)
    {
        if (is_array($routes)) 
        {
            $this->routes = $routes;
            return true;    
        }
        return false;    
    }
    
    /** 
    * Sets the route list of acceptable registered routes
    * @param array $routes A list of acceptable routes that are a 1:1 map to calls on the controller class
    */ 
    private function isRoute($route)
    {
        if (in_array($route, $this->routes)) return true; 
        return false;    
    }
}
?>