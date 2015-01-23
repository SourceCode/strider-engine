<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

$path = str_replace('\tests','', __DIR__);
require_once($path . '/system/trait/singleton.php');
require_once($path . '/system/abstract/datastore.php');

/**
* Test for Globals concrete class
*/
class GlobalsTest extends \PHPUnit_Framework_TestCase
{

    /**
    * Tests Getters and Setters
    */
    public function testSettersGetters()
    {
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->setApplication('Application');
        
        //get value back
        $c = $a->app();

        // Assert
        $this->assertEquals('Application', $c);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->setController('Controller');
        
        //get value back
        $c = $a->controller();

        // Assert
        $this->assertEquals('Controller', $c);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->setModule('Module');
        
        //get value back
        $c = $a->module();

        // Assert
        $this->assertEquals('Module', $c);
        
    }
    
    /**
    * Tests Parameter Getters and Setters
    */
    public function testSetParm()
    {
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->setParm(1, 'test1value');
        
        //get value back
        $c = $a->getParm(1);

        // Assert
        $this->assertEquals('test1value', $c);      
    }
    
    /**
    * Tests Initialization of the class and properties
    */
    public function testInit()
    {
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->url();
        
        //No url path will be present at CLI
        $c = '';

        // Assert
        $this->assertEquals($c, $b);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->filepath();
        
        $c = Config::$filePath;

        // Assert
        $this->assertEquals($c, $b);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->webpath();
        
        $c = Config::$webPath;

        // Assert
        $this->assertEquals($c, $b);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->get();
        
        $c = $_GET;

        // Assert
        $this->assertEquals($c, $b);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->post();
        
        $c = $_POST;

        // Assert
        $this->assertEquals($c, $b);

        // Arrange
        $a = new Globals();

        // Act
        $b = $a->request();
        
        $c = $_REQUEST;

        // Assert
        $this->assertEquals($c, $b);
        
        // Arrange
        $a = new Globals();

        // Act
        $b = $a->files();
        
        $c = $_FILES;

        // Assert
        $this->assertEquals($c, $b);
    }
    
}