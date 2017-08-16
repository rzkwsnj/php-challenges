<?php

// $this->assertEquals(stray([1, 1, 2]), 2);
// $this->assertEquals(stray([4, 2, 2, 2, 2]), 4);
// $this->assertEquals(stray([4, 4, 4, 5, 4, 4, 4]), 5);

function stray($arr)
{
  	$res = array();
	$trash = array();
  
	for ( $i = 0; $i < count($arr); $i++ )
	{
		
		if ( empty($res) ) {
				
			array_push($res, $arr[$i]);
			
		} else {
			
			if ( in_array($arr[$i], $res) ) {
			
				array_push($res, $arr[$i]);
				
			} else {
			
				array_push($trash, $arr[$i]);
				
			}
			
		}
  
		
	}
	
	return ( count($res) === 1 ) ? $res[0] : $trash[0];

}

print stray([4, 2, 2, 2, 2]);
