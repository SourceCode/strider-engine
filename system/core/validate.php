<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;
use \Respect\Validation\Validator;
/**
 * The base Validate class
 */
class Validate extends \Respect\Validation\Validator
{
    /**
    * Validates that a username meets the username criteria
    * @param string $username The username to validate against the criteria
    * @return string|bool Returns username if valid false if invalid
    */
    public static function username($username)
    {
        return self::alnum()->noWhitespace()->length(1,15)->validate($username);       
    }
    
    /**
    * Validates that a password meets the password criteria
    * @param string $password The username to validate against the criteria
    * @return boolean True if password is valid false if invalid
    */
    public static function password($password)
    {
       $r1 = '/[A-Z]/';  //uppercase
       $r2 = '/[a-z]/';  //lowercase
       #$r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  //special chars
       $r4 = '/[0-9]/';  //numbers
       if (preg_match_all($r1, $password) < 1) return false;
       if (preg_match_all($r2, $password) < 1) return false;
       if (preg_match_all($r4, $password) < 1) return false;
       if (strlen($password) < 6) return false;
       return true;                   
    } 
}