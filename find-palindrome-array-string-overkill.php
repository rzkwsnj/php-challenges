<?php

$palindrome = ["Madam", "lol", "mom", "daD", "teSt", "level"];

foreach ( $palindrome as $row )
{
	if ( strtolower($row) === strrev(strtolower($row)) ) {
		
		echo nl2br( strtolower($row) . " is PALINDROME ! \n\n");
		
	} else {
		
		echo nl2br( strtolower($row) . " is NOT PALINDROME ! \n\n");
		
	}
	
}
