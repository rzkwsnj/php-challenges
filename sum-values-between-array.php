<?php

$data = [[3, 1], [10, 7]]; // 6 34

foreach ($data as $a => $b) {
	sumRange($b);
}

function sumRange($arr) {
	$sum = 0;
	for ($i = min($arr); $i <= max($arr); $i++) {
		$sum += $i;
	}
	
	print $sum . " ";
}
