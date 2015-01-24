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
* Test for Template concrete class
*/
class TemplateTest extends \PHPUnit_Framework_TestCase
{
    public function testSetValueGetValue()
    {
        // Arrange
        $a = new Template();

        // Act
        $b = $a->setValue('testKey', 'testValue');

        // Assert
        $this->assertEquals(true, $b);
        
        // Arrange
        $a = new Template();

        // Act
        $b = $a->setValue('testKey', 'testValue');
        $c = $a->getValue('testKey');

        // Assert
        $this->assertEquals('testValue', $c);
    }
    
    public function testExistValue()
    {
        // Arrange
        $a = new Template();

        // Act
        $b = $a->setValue('testKey', 'testValue');
        
        $c = $a->existValue('testKey');

        // Assert
        $this->assertEquals(true, $c);
    }
    
    public function testAddGetJs()
    {
        // Arrange
        $a = new Template();

        // Act
        $b = $a->addJs('/test/js/file.js');
        
        $c = $a->getJs();
        
        $d = '<script type="text/javascript" src="/test/js/file.js"></script>' . "\r\n";
        
        // Assert
        $this->assertEquals($d, $c);
    }
    
    public function testAddGetCSS()
    {
        // Arrange
        $a = new Template();

        // Act
        $b = $a->addCSS('/test/css/file.css');
        
        $c = $a->getCSS();
        
        $d = '<link href="/test/css/file.css" rel="stylesheet">' . "\r\n";
        
        // Assert
        $this->assertEquals($d, $c);
    }
}