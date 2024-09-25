

<?php

//Lo he utilizado en el descuento.php

        function saludo($n){
            echo"Hola, $n";
        }

        function cuenta($a,$b){

            if($a < $b){
                while($a < $b){
                    echo $a,",";
                    $a++;
                }
                echo $b;
            }else{
                while($a > $b){
                    echo $a,",";
                    $a--;
                }
                echo $b;
            }
            
        }

        function cuentab($a,$b,$c = 1){
            
            if($c <= 0 ){
                echo"No se pueden hacer los calculos";
            }else{
                if($a < $b){
                    while($a < $b){
                        echo $a,",";
                        $a = $a + $c;
                    }
                    echo $b;
                }else{
                    while($a > $b){
                        echo $a,",";
                        $a = $a - $c;
                    }
                    echo $b;
                }
            }         
            }

        function intercambia(&$a,&$b){
            $c = $a;
            $d = $b;
            $b = $c;
            $a = $d;
        }

        
        function calculaDescuento($precio,$descuento = 0):int{
            $resta = $precio*$descuento/100;

            $precioConDescuento = $precio - $resta;

            return $precioConDescuento;
        }

        
   
    ?>