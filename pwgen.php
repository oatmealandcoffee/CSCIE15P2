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

require 'wordlist.php';

/* global values */
$defaultWords = 4;

$maxWords = 10;
$minNumber = 1000;
$maxNumber = 9999;

// word_count value | 0
// include_number on | null
// include_special on | null
// uppercase_first on | null

/* capture the form values */

$wordCount = $_GET['word_count'];
$includeNumber = $_GET['include_number'];
$includeSpecial = $_GET['include_special'];
$uppercaseFirst = $_GET['uppercase_first'];

/* validate form values */
if ( $wordCount ) {
    if ( is_numeric( $wordCount ) == false ) {
        $word_count = $defaultWords;
    } else {
        if ( $wordCount < 1 ) {
            $wordCount = $defaultWords;
        } elseif ( $wordCount > $maxWords ) {
            $wordCount = $maxWords;
        }
    }
} else {
    $wordCount = $defaultWords;
}

/* build the password */

$passwordBuffer = array();

for ( $word = 0 ; $word < $wordCount ; $word++ ) {
    array_push( $passwordBuffer, getWordFromList() );
}

/* handle the special cases */

if ( $includeNumber ) {
    $rn = rand( $minNumber, $maxNumber );
    array_push( $passwordBuffer, $rn );
}

if ( $includeSpecial ) {
    $rc = rand( 0, count( $specialCharList ) - 1 );
    array_push( $passwordBuffer, $specialCharList[$rc] );
}

if ( $uppercaseFirst ) {
    $passwordBuffer[0] = ucfirst( $passwordBuffer[0] );
}

/* prep for output */

$generatedPassword = join( ' ', $passwordBuffer );



/*
 * Purpose: gets a random word from the source word list
 * Arguments: None
 * Returns: String
 */
function getWordFromList()
{
    global $wordlist;
    $len = count( $wordlist );
    $idx = rand( 0, $len - 1 );
    return $wordlist[$idx];
}