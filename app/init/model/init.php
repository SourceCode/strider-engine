<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The InitModel example model
*/
 
class InitModel extends Model implements JSONModel
{
    public function getObjectFromFile($file)
    {
        
    }
    
    public function getObjectFromURL($url)
    {
        
    }
    
    public function test()
    {
        echo 'init model loaded';
    }
}