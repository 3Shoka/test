<?php

// hilih konverter
$string = "jika input yang dimasukkan";
$array = str_split($string);
$vocal = array('a','u','e','o');

echo str_replace($vocal, 'i', $string);
