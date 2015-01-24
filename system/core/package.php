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
                    'public/components/jquery/dist/jquery.min.js'
                ),   
            ),
            'jquery-ui' => array(
                'js' => array(
                    'public/components/jquery-ui/jquery-ui.min.js'
                ),
                'css' => array(
                    'public/components/jquery-ui/themes/base/theme.css'
                )    
            ),
            'jquery-file-upload' => array(
                'js' => array(
                    'public/components/jquery-file-upload/jquery.fileupload.js'
                )   
            ),            
            'fontawesome' => array(
                'css' => array(
                    'public/components/font-awesome/css/font-awesome.min.css'
                )    
            ),
            'chartjs' => array(
                'js' => array(
                    'public/components/chartjs/Chart.min.js'
                ),  
            ),
            'select2' => array(
                'js' => array(
                    'public/components/select2/select2.min.js'
                ),
                'css' => array(
                    'public/components/select2/select2.css',
                    'public/components/select2/select2-bootstrap.css'
                )    
            ),
            'tinymce' => array(
                'js' => array(
                    'public/components/tinymce-dist/jquery.tinymce.min.js',
                    'public/components/tinymce-dist/tinymce.min.js'
                ),
                'css' => array(
                    'public/components/tinymce-dist/themes/modern/theme.min.js'
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
    * Gets a set of packages from the package system
    * @param array $packageList The list of packages to be retrieved
    * @return array|bool Returns an array if the packages are found, false if nothing is found or invalid input.
    */
    public function getPackages(array $packageList)
    {
        $css = array(); $js = array();
        foreach($packageList as $package)
        {
            $item = $this->getPackage($package);
            if ($item != false)
            {
                if (is_array($item['css'])) $css = array_merge($css, $item['css']);
                if (is_array($item['js'])) $js = array_merge($js, $item['js']);
            }   
        }
        
        return array('css' => $css, 'js' => $js);
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