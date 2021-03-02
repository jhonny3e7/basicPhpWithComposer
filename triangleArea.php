<?php
    function getTriangleArea($base, $height) {
        return ($base * $height) * 0.5;
    }

    // prueba is
    $b = 4;
    $h = 6;

    echo "El area del triángulo es: ". getTriangleArea($b, $h);
?>

/*
    $b = 6;
    $a = $b;
    $h = 0;

    $h1 = (sqrt(3*$a)/2);
    $h2 = (3*($a*$a))/4;
    echo '<br/>';
    echo "area 1: $h1";    
    echo '<br/>';
    echo "2h: ".($h1*2);
    echo '<br/>';    
    echo "a: ".(pow(($h1*2),2))/3;
    echo '<br/>';
*/
