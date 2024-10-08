<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copia seguridad</title>
</head>
<body>
    <?php
        $fichero = "datos.txt";
        $ficherocopia = "copia_datos.txt";
        if(file_exists($fichero)){
            $contenido = file_get_contents($fichero);

            $contenidoModificado = preg_replace("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/",$contenido);

            file_put_contents($ficherocopia,$contenidoModificado);
            
            echo "Copia hecha";
        }else {
            echo "No se ha podido hacer la copia";
        }
        
    ?>
</body>
</html>