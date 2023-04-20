<?php
include_once "Fecha.php";
$fecha1 = new Fecha(29,12,1996);
$fecha2 = new Fecha(06,6,2006);
$DiasAIncrementar=20;

echo "la fecha 1  abreviada es : ".$fecha1->fechaAbreviada()." \n"; 
echo "la fecha 2  abreviada es : ".$fecha2->fechaAbreviada()." \n";
echo "la fecha 1 extendida es : ".$fecha1->fechaExtendida()." \n";
echo "la fecha 2 extendida es : ".$fecha2->fechaExtendida()." \n";
echo "Si se incremente la fecha 1 en ".$DiasAIncrementar." dias, la fecha sera igual a ".$fecha1->incremento($DiasAIncrementar)->fechaExtendida();