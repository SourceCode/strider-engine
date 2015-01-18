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
    public function create();
    public function read();
    public function update();
    public function delete();
}