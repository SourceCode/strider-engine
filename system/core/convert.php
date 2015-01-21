<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The base Convert class
 */
class Convert
{
    /**
    * Converts a date to sql format and optionally converts a date based in seconds to a date first
    * @param string $date The date picker date or seconds that will be converted to the SQL date format.
    * @param boolean Flag that controls conversion of seconds to date.
    * @return string|boolean Returns SQL date if valid, returns false if invalid date.
    */
    public static function datepickerDatetoSQLDate($date, $secondsTodate = true)
    {
        if ($secondsTodate == true) $date = self::secondsToDate($date);
        if (strpos($date, '/') > 0)
        {
            $dateSeg = explode('/', $date);
            return $dateSeg['2'] . '-' . $dateSeg['0'] . '-' . $dateSeg['1'];    
        }
        return false;
    }

    /** 
    * Hashes value with halConfig::$salt
    * @param string $value The value to be hashed.
    * @return string The value plus salt hashed
    */
    public static function hashValue($value)
    {
        return md5($value . Config::$salt);
    }

    /**  
    * Returns the string value of the scaled size of total bytes.
    * @param int $bytes Total bytes to be formatted.
    * @return string Largest size formatted byte string. 
    */
    public static function formatSize($bytes)
    {
        $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
        for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
        return( round( $bytes, 2 ) . " " . $types[$i] );
    }
    
    /** 
    * Produces the date for the seconds provided with optional declareable formatting.
    * @param int $seconds Seconds to be converted to date
    * @return string Seconds formatted into the supplied date format.
    */
    public static function secondsToDate($seconds, $format = 'm/d/Y')
    {
        return date($format, $seconds);
    }
    
    /** 
    * Produces a "clean name" which means it lowercases, alphanumeris, and clears whitespace and replaces _ and " " with -
    * @param string $string The string that will be cleaned
    * @return string Returns a string with the provided string formatted as a "clean name"
    */
    public static function cleanName($string)
    {
        $string = strtolower($string);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
}