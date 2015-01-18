<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The XMLModel Interface
 */
interface XMLModel
{
    public function getObjectFromFile($file);
    public function getObjectFromURL($url);
}