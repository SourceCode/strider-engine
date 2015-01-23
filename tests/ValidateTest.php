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
class ValidateTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Tests Username Validation
    */
    public function testUsername()
    {
        // Arrange
        $a = new Validate();

        // Act
        $b = $a->username('testuser');

        // Assert
        $this->assertEquals(true, $b);
    }
    
    /**
    * Tests Password Validation
    */
    public function testPassword()
    {
        // Arrange
        $a = new Validate();

        // Act
        $b = $a->password('StriderTest5');

        // Assert
        $this->assertEquals(true, $b);
    }
}