<?php
function generadorCongruencialLineal($x0,$a,$m,$c) {
            
    $aXi =  (($a * $x0 + $c) % $m);
    $Ri = $x0 + 1 / $m;
    $respuesta = array($aXi, $Ri);
                       
    return $respuesta;
} 
$x0 = 4;
$a = 5;
$m = 8;
$c = 7;

$respuesta = generadorCongruencialLineal($x0,$a,$m,$c);
$aXi = $respuesta[0];
$Ri = $respuesta[1];
$i = 1;
$total = $aXi;
echo $i .' '. $aXi .' '. $Ri."\n";
while ($aXi != $x0) {
// for($j=0; $j<200; $j++) {
    $respuesta = generadorCongruencialLineal($aXi,$a,$m,$c);
    $aXi = $respuesta[0];
    $Ri = $respuesta[1];
    $total = $total + $aXi;;
    $i = $i+1;
    echo $i .' '. $aXi .' '. $Ri."\n";
    if($aXi == $x0) {
        echo 'El ciclo de vida del generador es '. $i . ' Iteraciones' ."\n";
        echo 'la media '. ($total/$i)."\n";
    }
}