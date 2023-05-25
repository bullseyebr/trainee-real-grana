<?php
/**
    * Tests if a string contains a given element
    *
    * ### str_contains
    * Related global function (description see above).
    *
    * > #### [( jump back )](#available-php-functions)
    *
    * ```php
    * str_contains( string|array $needle, string $haystack ): boolean
    * ```
    *
    * #### Example
    * ```php
    * $string = 'The quick brown fox jumps over the lazy dog';
    * $array = [
    *      'cat',
    *      'fox'
    * ];
    *
    * str_contains( $array, $string );
    *
    * // bool(true)
    * ```
    *
    * @param string|array $needle
    * A string or an array of strings.
    * @param string       $haystack
    * The string to search in.
    * @return bool
    * True if $needle is found, false otherwise.
    */


// needle = agulha
// haystack = palheiro
function contains($needle, $haystack)
{
    foreach ((array)$needle as $ndl) {
        if (strpos($haystack, $ndl) !== false) {
            return true;
        }
    }

    return false;
}
