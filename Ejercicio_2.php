<?php

    // 2.Hacer un programa que, dado el valor de n, calcule la suma
    // de la serie: (1/1) + (1/2) + (1/3) +...+ (1/n)

    $n = (int) 3;
    $total = (double) 0;
    $cadena = (string) "";
    for ($i=1; $i <= $n ; $i++) { 
        $total += (1/$i);
        $cadena .= "(1 / $i) +";
    }
    echo(substr($cadena, 0, -1)." = ".number_format($total, 5, ',', '.'));
?>