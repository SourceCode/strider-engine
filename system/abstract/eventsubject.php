<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base subject abstract class
*/
abstract class EventSubject
{
    /**
    * Contains the registered observers
    */
    private $registered;
    
    /**
    * Registers an object to recieve Event Updates
    * These objects must implement signal() from the EventObserver interface
    * @param object $observer The object registered for event updates.
    * @return Returns true on completion, false if error occurs
    */
    public function register($observer)
    {
        if (is_object($observer))
        {
            $this->registered[] = $observer;
            return true;   
        }
        return false;
    }
    
    /**
    * Unregisters an object from recieving Event Updates
    * @param object $observer The object to be unregistered
    * @return Returns true on completion, false if no removal occured
    */
    public function unregister($observer)
    {
        foreach($this->registered as $key => $val) {
            if ($val == $observer) { 
              unset($this->observers[$key]);
              return true;
            }
        }
        return false;  
    }
    
    /**
    * Unregisters an object from recieving Event Updates
    * @param string $hook The hook the registered objects are updated about.
    * @return Returns true on broadcast completion
    */
    public function broadcast($hook, $value)
    {
        foreach($this->registered as $object)
        {
            $object->signal($hook, $value);
        }
        return true;    
    }
}