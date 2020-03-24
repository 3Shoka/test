<?php

//mengurutkan dari nilai kecil ke nilai yang lebih besar dan menghapus nilai yang sama
$data = array(4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0);

$unik = array_unique($data);

sort($unik);
print_r($unik);