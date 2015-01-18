<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The JSONModel Interface
 */
interface JSONModel
{
    public function getObjectFromFile($file);
    public function getObjectFromURL($url);
}