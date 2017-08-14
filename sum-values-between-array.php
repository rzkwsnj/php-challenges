<?php

$data = [[3, 1], [10, 7]]; // 6 18

foreach ($data as $a => $b) {
	if ($a == 0) {
		sumRange($b);
	}
	
	if ($a == 1) {
		sumRange($b);
	}
}

function sumRange($arr) {
	$sum = 0;
	for ($i = min($arr); $i <= max($arr); $i++) {
		$sum += $i;
	}
	
	print $sum . " ";
}
