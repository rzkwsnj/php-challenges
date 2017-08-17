<?php

$s = "!Hi! Hi!!!"; // expected = !Hi! Hi!!

print substr($s,-1) === "!" ? substr( $s, 0, -1) : $s;

// print preg_replace('/!$/', "", $s);

// $result = $s{ strlen( $s ) -1 };
// print $result == "!" ? substr( $s, 0, -1) : $s;
