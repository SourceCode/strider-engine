<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
* The base dataloader abstract blueprint
*/
abstract class DataLoader
{
    /**
    * Checks if a file exists and then loads it
    * @param string $file The full filepath and filename for the file to be loaded
    * @return string Returns the contents of the loaded file
    */
    public function loadFile($file)
    {
        if (file_exists($file))
        {
            return file_get_contents($file);    
        }
        return false;     
    }
    
    /**
    * Checks if a url exists and then loads it
    * @param string $url The url for the file to be loaded
    * @return string Returns the contents of the loaded url
    */
    public function loadURL($url)
    {
        $header = @get_headers($url);
        if($header[0] != 'HTTP/1.1 404 Not Found') 
        {
            return file_get_contents($url);    
        }
        return false; 
    }
}
?>