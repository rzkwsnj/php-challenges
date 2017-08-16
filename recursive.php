<?php

$input = -~0 + 3;

function factorial ( $n ) {
	
	if ( $n <= 0 ) {
		
		return "Must be greater than 0 !";
		
	} else {
	
		if ( $n === 1 ) {
		
			return 1;
			
		} else {
		
			return factorial ( $n-1 ) * $n;
			
		}
		
	}
	
		
}

print factorial($input);
