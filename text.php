<?php
function generadorCongruencialLineal($x0,$a,$m,$c) {
            
    $aXi =  (($a * $x0 + $c) % $m);
    $Ri = $x0+ 1 / $m;
    $respuesta = array($aXi, $Ri);
                       
    return $respuesta;
} 
$x0 = 71;
$a = 71;
$m = 341;
$c = 57;
$respuesta = generadorCongruencialLineal($x0,$a,$m,$c);
$aXi = $respuesta[0];
$aXn = $respuesta[1];
$i = 1;
$total = $aXi;
echo $i .' '. $aXi .' '. $aXn."\n";
while ($aXi != $x0) {
// for($j=0; $j<200; $j++) {
    $respuesta = generadorCongruencialLineal($aXi,$a,$m,$c);
    $aXi = $respuesta[0];
    $aXn = $respuesta[1];
    $total = $total + $aXi;;
    $i = $i+1;
    echo $i .' '. $aXi .' '. $aXn."\n";
    if($aXi == $x0) {
        echo 'El ciclo de vida del generador es '. $i . ' Iteraciones' ."\n";
        echo 'la media '. ($total/$i)."\n";
    }
}