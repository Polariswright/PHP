<?php
    echo "Sorteio ==>";
    echo rand(0,20);
    echo "<hr>";
    //too many echoes

    $a = rand(0,100);
    $b = rand(0,100);
    $c = rand(0,100);
    $d = rand(0,100);
 
    //seems like the rand determinate the range of the numbers applied
    //into the ();

    echo "$a- $b - $c - $d";
    echo "<hr>";

    echo "Maior==>";
    echo max($a,$b,$c,$d);
    echo "<hr>";

    echo "Menor==>";
    echo min($a,$b,$c,$d);
    echo "<hr>";

    $e= rand(1000,5000);
    echo "R$ $e";
    echo "<br>";
    echo number_format($e,2,",",".");
    echo "<hr>";

    $f = rand(1000,2000);
    echo "R$ $f";
    echo "<br>";
    echo number_format($f,2,",",".");


?>