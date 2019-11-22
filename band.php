<?php

echo "Het albumoverzicht: ".PHP_EOL;

$arr = array(
 "Citizen of Glass kost = " => 4.5 ,
 "Night kost = " => 9 ,
 "New Eyes kost = " => 5 ,
 "Strange Trails kost = " => 10
);

foreach ($arr as $totaal => $prijs){

    $gemmideld = array_sum($arr) / count($arr) ;

    echo "$totaal" . "$prijs".PHP_EOL;
}

echo "Totaal bedrag: €" . array_sum($arr) .PHP_EOL;
echo "Gemmidelde prijs: $gemmideld".PHP_EOL;