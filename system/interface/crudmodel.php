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
interface CRUDModel
{
    public function read($id);
    public function delete($id);
}