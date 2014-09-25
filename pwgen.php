<?php
/**
 * Created by PhpStorm.
 * User: philipr
 * Date: 2014/24/09
 * Time: 12:55
 *
 * Password generator
 *
 */

include 'wordlist.php';
$generatedPassword = 'foo';
$maxWords = 10;
generatePassword();

function generatePassword() {
    global $wordlist;
    $len = count( $wordlist );
    $idx = rand( 0, $len - 1 );
    global $generatedPassword;
    $generatedPassword = $wordlist[$idx];
}