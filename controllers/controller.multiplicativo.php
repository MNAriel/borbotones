<?php
    require_once "models/model.multiplicativo.php";

    class MultiplicadorController {

        public function datesFilterController() {

            if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["a_date"])){
                    echo '<script language="javascript">alert("La const. multiplicativa es requerida");</script>'; 
                    $errores[] = "La const. multiplicativa es requerida";
                }
                if(empty($_POST["m_date"])){
                    echo '<script language="javascript">alert("El modulo es requerido");</script>'; 
                    $errores[] = "El modulo es requerido";
                }
                  // El email es obligatorio y ha de tener formato adecuado
                if(empty($_POST["xo_date"])){
                    echo '<script language="javascript">alert("La Semilla es requerida");</script>'; 
                    $errores[] = "La Semilla es requerida";
                }
                if(empty($_POST["c_date"])){
                    echo '<script language="javascript">alert("Constante es requerida");</script>'; 
                    $errores[] = "Constante es requerida";
                }
                if(empty($errores)) {

                    $a = ($_POST["a_date"]);
                    $m = ($_POST["m_date"]);
                    $x0 = ($_POST["xo_date"]);
                    $c = ($_POST["c_date"]);
                    $respuesta = MultiplicadorModel::generadorModel($x0,$a,$m,$c);
                    if($respuesta == FALSE) {
                        echo '<script language="javascript">alert("Verifique los datos");</script>'; 
                    }
                    else {
                        $Xn = $respuesta[0];
                        $r = $respuesta[1];
                        $aXn = $respuesta[2];
                        $i = 1;
                        $total = $r;
                        echo '<tr>';
                        echo '<td class="text-center"> '.$i.'</td>';
                        echo '<td class="text-center"> '.$Xn.'</td>';
                        echo '<td class="text-center"> '.$aXn. '/'.$m.'</td>';
                        echo '<td class="text-center"> '.$r.'</td>';
                        echo '</tr>';
                        while ($r != $x0) {
                            $respuesta = MultiplicadorModel::generadorModel($r,$a,$m,$c);
                            $Xn = $respuesta[0];
                            $r = $respuesta[1];
                            $aXn = $respuesta[2];
                            $i = $i+1;
                            $total = $total+$r;
                            echo '<tr>';
                            echo '<td class="text-center"> '.$i.'</td>';
                            echo '<td class="text-center"> '.$Xn.'</td>';
                            echo '<td class="text-center"> '.$aXn. '/'.$m.'</td>';
                            echo '<td class="text-center"> '.$r.'</td>';
                            echo '</tr>';
                            if($r == $x0) {
                                // echo 'El ciclo de vida del generador es '. $i . ' Iteraciones' ."\n";
                                // echo 'la media '. ($total/$i)."\n";
                            }              
                        }
                        echo '</tr>';
                        echo '</tbody>';
                        echo '</table>';
                        echo '<ul class="list-group list-group-flush">';
                        echo '<li class="list-group-item list-group-item-success">El ciclo del generadores es ' .$i. '</li>';
                        echo '<li class="list-group-item list-group-item-info">Con la semilla ' .$x0. '</li>';
                        echo '<li class="list-group-item list-group-item-info">El Multiplicador ' .$a. '</li>';
                        echo '<li class="list-group-item list-group-item-info">La constante aditiva ' .$c. '</li>';
                        echo '<li class="list-group-item list-group-item-info">El modulo ' .$m. '</li>';
                        echo '</ul>';                       
                        }

                }
            }
        }
    }
?>