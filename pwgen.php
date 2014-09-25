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
$maxWords = 10;
$generatedPassword = '';

generatePassword(4, false, false, false);

/*
 * Purpose: builds the password to the given specs
 * Arguments:
 *  wordCount: Integer, number of words to use
 *  includeNumber: Boolean, include a number in the password
 *  includeSpecial: Boolean, include a special character
 *  uppercaseFirst: Boolean, include a special character
 * Returns: None
 */
function generatePassword( $wordCount, $includeNumber, $includeSpecial, $uppercaseFirst )
{
    global $generatedPassword;
    global $maxWords;

    if ( $wordCount < 1 ) {
        $wordCount = 1;
    }
    if ( $wordCount > $maxWords ) {
        $wordCount = $maxWords;
    }

    $generatedPassword = '';
    for ( $w = 0 ; $w < $wordCount ; $w = $w + 1 ) {
        $generatedPassword = $generatedPassword . ' ' . getWordFromList();
    }

}

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