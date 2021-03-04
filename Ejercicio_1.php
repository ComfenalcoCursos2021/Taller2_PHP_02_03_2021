<?php
    // 1.Ingresar número de término de la siguiente serie: 
    // 200, 198, 196, 194 ,…….,N, mostrar la suma de la serie 
    // completa.

    $i = (int) 200;
    $total = (int) 0;
    $cadena = (string) "";
    ciclo:
    if($i!=0){
        $total += $i;
        $cadena .= "$i +";
        $i -= 2;
        goto ciclo;
    }
    print_r(substr($cadena, 0, -1)." = ".number_format($total));
?>r