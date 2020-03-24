<?php

// membandingkan nilai rudi dan ani

$rudy = array(8,7,6,9);
$ani = array(5,8,9,6);

$hasil = array('rudy' => 0, 'ani' => 0);

for ($i=0; $i < sizeof($rudy); $i++) { 
    if($rudy[$i] > $ani[$i]){
        $hasil['rudy'] +=1; 
    } else{
        $hasil['ani'] +=1;
    }
}

print_r($hasil);