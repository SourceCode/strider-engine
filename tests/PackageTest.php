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
* Test for Package concrete class
*/
class PackageTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Test for getPackage
    */
    public function testGetPackage()
    {
        // Arrange
        $a = new Package();

        // Act
        $b = $a->getPackage('bootstrap');
        
        $c = array(
                'js' => array('public/components/bootstrap/dist/js/bootstrap.min.js'),
                'css' => array('public/components/bootstrap/dist/css/bootstrap.min.css')    
                );

        // Assert
        $this->assertEquals($c, $b);
    }
    
    /**
    * Test for getPackages
    */
    public function testGetPackages()
    {
        // Arrange
        $a = new Package();

        // Act
        $b = $a->getPackages(array('bootstrap', 'jquery-ui'));

        $c = array(
                    'js' => array(
                        'public/components/bootstrap/dist/js/bootstrap.min.js',
                        'public/components/jquery-ui/jquery-ui.min.js'
                    ),
                    'css' => array(
                        'public/components/bootstrap/dist/css/bootstrap.min.css',
                        'public/components/jquery-ui/themes/base/theme.css',
                    )

                );
                
        // Assert
        $this->assertEquals($c, $b);
    }
    
    /**
    * Test for addPackage
    */
    public function testAddPackage()
    {
        // Arrange
        $a = new Package();

        // Act
        $package = array(
                    'js' => array(
                        '/this/is/a/test/js.js',
                    ),
                    'css' => array(
                        '/this/is/a/test/js.css',
                    )
                );
        
        $b = $a->addPackage('testPackage', $package);
  
        // Assert
        $this->assertEquals($package, $a->getPackage('testPackage'));
    }
}