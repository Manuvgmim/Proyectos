<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampliación</title>
</head>
<body>
    
    <?php
    
        function calculoTiempo($segundos){
            $anyo = ($segundos/60/60/24/365);
            $meses = ($segundos/60/60/24/30);
            $dias = ($segundos/60/60/24);

            $anyo = floor($anyo);
            $meses = floor($meses);
            return "Has vivido una cantidad de $anyo años, $meses meses, $dias dias.";
        }

        date_default_timezone_set('Europe/Madrid');

        $fechaActual = time();
        $fechaD = strtotime("2004-10-28");
        
        $segundos = $fechaActual - $fechaD;

        echo $segundos, calculoTiempo($segundos);
    ?>

</body>
</html>