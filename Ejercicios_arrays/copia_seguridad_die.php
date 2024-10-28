<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die</title>
</head>
<body>
    
    <?php 
    
    $archivoOrig = "datos.txt";

    $copia = "die.txt";

    $mail = "Julian@gmail.com";

    $patron = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

    if(file_exists($archivoOrig) or die ("Archivo no encontrado")){
    
        $content = file_get_contents($archivoOrig);

        $contentM = preg_replace($patron,$mail,$content);

        if(file_put_contents($copia,$contentM) !== false or die ("Archivo no encontrado")){
        
            echo "Copia de seguridad hecha ;)";
        } else {
            echo "Error al hacer la copia :(";
        }
        } else {
            echo "El archivo no existe :(";
    }

    ?>
</body>
</html>