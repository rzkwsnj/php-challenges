<?php

$palindrome = ["Madam", "lol", "mom", "daD", "teSt", "level"];

// OVERKILL ?
foreach ( $palindrome as $row )
{
	if ( strtolower($row) === strrev(strtolower($row)) ) {
		
		echo nl2br( strtolower($row) . " is PALINDROME ! \n\n");
		
	} else {
		
		echo nl2br( strtolower($row) . " is NOT PALINDROME ! \n\n");
		
	}
	
}

// BETTER ?
foreach ( $palindrome as $row )
{
	
	if ( strtolower($row[0] . $row[1]) === strtolower($row[strlen($row) - 1] . $row[strlen($row) - 2]) ) {
		
		echo nl2br(strtolower($row) . " is PALINDROME ! \n\n");
			
	} else {
	
		echo nl2br(strtolower($row) . " is NOT PALINDROME ! \n\n");
		
	}
	
	
}
