<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

$path = str_replace('\tests','', __DIR__);
require_once($path . '/system/trait/singleton.php');

class ConvertTest extends \PHPUnit_Framework_TestCase
{
    
    /**
    * Tests DatepickerDatetoSQLDate with both forms of input
    */
    public function testDatepickerDatetoSQLDate()
    {
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->datepickerDatetoSQLDate(1421988672, true);

        // Assert
        $this->assertEquals('2015-01-23', $b);
        
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->datepickerDatetoSQLDate('01/23/2015', false);

        // Assert
        $this->assertEquals('2015-01-23', $b);
    }
    
    /**
    * Tests hashValue
    */
    public function testHashValue()
    {
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->hashValue('unit');
        
        //generate the hash value based on system salt.
        $value = md5('unit' . Config::$salt);
        
        // Assert
        $this->assertEquals($value, $b);   
    }
    
    /**
    * Tests formatSize
    */
    public function testFormatSize()
    {
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->formatSize(998877654321);
        
        // Assert
        $this->assertEquals('930.28 GB', $b);
        
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->formatSize(9988721);
        
        // Assert
        $this->assertEquals('9.53 MB', $b);
    }
    
    /**
    * Tests secondsToDate
    */
    public function testSecondsToDate()
    {
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->secondsToDate(1421988672);
        
        // Assert
        $this->assertEquals('01/23/2015', $b); 
        
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->secondsToDate(1421988672, 'Y-m-d');
        
        // Assert
        $this->assertEquals('2015-01-23', $b);  
    }
    
    /**
    * Tests cleanName
    */
    public function testCleanName()
    {
        // Arrange
        $a = new Convert();

        // Act
        $b = $a->cleanName('This%Test *_#@ NAME Should B++Fixed');
        
        // Assert
        $this->assertEquals('thistest---name-should-bfixed', $b); 
    }
}