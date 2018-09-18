<?php
    
    class MultiplicadorModel {

        static function generadorModel($x0,$a,$m,$c) {

            if($m > $x0 && $m > $a && $m > $c) {

                if($x0 >= 0 && $a >= 0 && $c >= 0) {

                    $Ri = $x0+ 1 % $m - 1;
                    $r =  (($a * $x0 + $c) % $m);
                    $aXn =  $a * $x0 + $c;
                    $respuesta = array($Ri, $r, $aXn);
                                    
                    return $respuesta;
                }
                else {
                    $respuesta = FALSE;
                    return $respuesta;
                }
            }
            else {
                $respuesta = FALSE;
                return $respuesta;
            }
        }
    }