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
$defaultWords = 4;
$maxWords = 10;

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

if ( is_numeric( $wordCount ) == false ) {
    $word_count = $defaultWords;
} else {
    if ( $wordCount < 1 ) {
        $wordCount = $defaultWords;
    } elseif ( $wordCount > $maxWords ) {
        $wordCount = $maxWords;
    }
}

$passwordBuffer = array();

for ( $word = 0 ; $word < $wordCount ; $word++ ) {
    array_push( $passwordBuffer, getWordFromList() );
}

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