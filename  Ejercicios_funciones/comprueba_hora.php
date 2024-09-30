<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba hora</title>
</head>
<body>
    <?php 
        $hora = "41:10:45";
        
        if (preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $hora, $partes) == 1)
        {

            if($partes[1] < 0 || $partes[1] > 23 || $partes[2] < 0 || $partes[2] > 59 || $partes[3] < 0 || $partes[3] > 59){
                echo "Formato de la hora no válido";
            }else{
                echo "La hora completa es " . $partes[0] . "<br>";
                echo "Hora: " . $partes[1] . "<br>";
                echo "Minutos:  " . $partes[2] . "<br>";
                echo "Segundos: " . $partes[3];
            }
        
        } else {
        echo "Formato de la hora no válido";
        }


    ?>
</body>
</html>