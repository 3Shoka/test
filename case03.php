<?php

// mengembalikan kata benar ketika membaca kata dari belakang maupun depan hasilnya sama
$string = "kodok";

$string_rev = strrev($string);
echo $string." -> ".$string_rev;
echo $string == $string_rev ? ' benar' : ' salah';