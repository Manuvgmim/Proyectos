<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo textos</title>
</head>
<body>
    <h1>Menejo de textos</h1>
    <?php
    define("PI", 3.141598);
        $radio = 5.4;
        $area = PI * $radio;
        $textoResultado = "El área calculada del círculo es: " .number_format($area,2);
        echo $textoResultado ."<br>";
        $textoResultadoMayus = strtoupper($textoResultado);
        echo $textoResultadoMayus ."<br>";
        $textoResultadoModificado = $textoResultado;
        str_replace("calculada","obtenida",$textoResultadoModificado);
        echo $textoResultadoModificado . "<br>";
        echo "$textoResultadoModificado tiene " .strlen($textoResultadoModificado) ." caracteres <br>";
        $posicion = strpos($textoResultadoModificado, "círculo");
        echo "La palabra círculo está en la posición $posicion <br>";
        $numeros = "1,2,3,4,5";
        $partes = explode(",", $numeros);
        
        $total = 0;
        for($i=0;$i < count($partes);$i++){
            $total += (int)$partes[$i];
        }

        $partes = implode("+", $partes);

        echo "$partes = $total"

    
    ?>

</body>
</html>