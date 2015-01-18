<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider\Init;
use \Strider;

/**
 * Init Application Controller
 */
class Init extends \Strider\Controller implements \Strider\webApplication
{
    
    public function route()
    {
        //$method = \Strider\Globals::controller();
        /* In this application example we need to look at app for our method, 
        everything is rolled back 1 space because of the removed controller 
        in the case of a real application you should just use the method call above.
        */
        $method = strtolower(\Strider\Globals::app());
        if ($method == null) $method = 'index';
        $this->$method(); 
    }
    
    public function index()
    {
        echo 'Strider Init Application Default Index';    
    }
    
    public function test()
    {
        echo 'This is the public test function';
    }
}
?>