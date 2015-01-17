<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base Config class
*/
class Config
{
    use Singleton;
    public static $viewFileType = 'twig';
    public static $webPath = 'http://localhost/strider-engine/';   
    public static $filePath = 'C:/wamp/www/strider-engine/';   
    public static $appStorage = 'app/';   
    public static $modelStorage = 'model/';   
    public static $viewStorage = 'view/';  
    public static $controllerStorage = 'controller/';
    public static $debugMode = true;
       
}