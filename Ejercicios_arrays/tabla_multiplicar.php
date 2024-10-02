<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <?php 
        $numeros = array();
        
        for($i=0;$i<=10;$i++){
            $cont = 0;
            echo "Tabla del $i: <br>";
            for($j=0;$j<=9;$j++){
                $resultado = $i * $j;
                $numeros[$i][$j] = $resultado;
                
                echo "$i X $cont = ". $numeros[$i][$j]. "<br>";
                $cont++;
            }
            echo "<br>";
        }

        
        
    ?>
</body>
</html>