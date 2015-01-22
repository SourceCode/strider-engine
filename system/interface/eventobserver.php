<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base Observer abstract class
*/
interface EventObserver
{
    /**
    * Recieves a signal from the event observers that a change has occured and the hook and value for the change.
    * @param string $hook The hook this refers to.
    * @param mixed $value The value passed back with the event update
    * @return boolean Returns true on completion and false on error
    */
    public function signal($hook, $value);
}