<?php

/*
1
1 1 
1 2 1 
1 3 3 1 
1 4 6 4 1 
1 5 10 10 5 1 
1 6 15 20 15 6 1 
1 7 21 35 35 21 7 1 
1 8 28 56 70 56 28 8 1 
1 9 36 84 126 126 84 36 9 1 
*/

// Initial line
$init = 1;

// Total lines
$input = 10;

// Base
$base = array(1,1);

if ( !empty($input) && $input > 1 ) {
	
	// Initial line
	echo $init . "<br />";
	
	for ( $i = 0; $i<=$input; $i++ )
	{
	  // Create array
	  $arr = range($init, $i);
	  
	  // Set 1st & Last item set to 1
	  $arr[0] = $arr[count($arr)-1] = 1;  
	  
	  // Get Previous Row's Array values for summation
	  // We start with index 1, zeroth element always holds 1
	  for ( $k=1; $k<count($arr)-1; $k++) 
	  {
		$arr[$k] = $base[$k] + $base[$k-1];
	  }
	  
	  // The new ARRAY
	  if( is_array( $arr ) && !empty( $arr ) ) {
		  
	      for( $i=0; $i<count($arr); $i++) 
		  {
		      echo $arr[$i] . " ";
		  }
		  
	  }
		
	  echo "<br />";
	  
	  // Preserve Current Array
	  $base = $arr;
	}
	
} else {
	
	echo "Must be greater than 1";
	
}
