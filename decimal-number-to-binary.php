<?php

/*
Converting a decimal number to binary is a little more complex. 
Once you get the hang of it though it's fairly straight forward. 
There are a few ways you may approach converting decimal to binary but the method 
I find most convenient is repeated division by 2.

With repeated division by 2 we repeatedly divide the number by 2 and record the remainder. 
Once you've done this, all the way down to 0, you read the remainder digits from bottom to 
top and you have your binary number. The example below will illustrate. The result of division 
by 2 is listed on the left and the remainder is listed on the right.

[http://ryanstutorials.net/binary-tutorial/binary-conversions.php]
*/

$random = rand(1, 1000);

print $random . " => Result in Binary : ";

$res = array();

while ( $random > 1 ) {

	if ( $random % 2 == 1 ) {
		
		array_push($res, 1);
	
	} else {
		
		array_push($res, 0);

	}
	
	$random /= 2;

}

foreach ( array_reverse($res) as $k => $v ) {

	print $v;

}
