<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The base Package class
 */
class Package
{
    /**
     * Contains the packages for the package system
     */
    private $packages = array();
    
    /**
    * Constructs the object and sets the default packages included with bower from install.sh
    */
    public function __construct()
    {
        $this->packages = array(
            'bootstrap' => array(
                'js' => array(
                    'public/components/bootstrap/dist/js/bootstrap.min.js'
                ),
                'css' => array(
                    'public/components/bootstrap/dist/css/bootstrap.min.css'
                )    
            ),
            'jquery' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'jquery-ui' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'jquery-file-upload' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'fontawesome' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'chartjs' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'select2' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
            'tinymce' => array(
                'js' => array(
                    'file1'
                ),
                'css' => array(
                    'file1'
                )    
            ),
        );        
    }
    
    /**
    * Gets a package from the package system
    * @param string $name The name of the package to retrieve
    * @return array|bool Returns an array if the package is found, false if nothing is found.
    */
    public function getPackage($name)
    {
        if (isset($this->packages[$name])) return $this->packages[$name];
        return false;    
    }
    
    /**
    * Adds a package to the package system
    * @param string $name The name for the package
    * @param array $package The package array 
    * @return bool Returns true if the package was set, false if not
    */
    public function addPackage($name, array $package)
    {
        $this->packages[$name] = $package;    
    }
    
    /**
    * Returns the list of packages
    * @return array Reurns the current configed package list 
    */
    public function getPackageList()
    {
        return $this->packages;    
    }
}