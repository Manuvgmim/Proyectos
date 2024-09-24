<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaludoFunciones</title>
</head>
<body>
    
    <?php
        function saludo($n){
            echo"Hola, $n";
        }
    ?>

    <h1>Saludo</h1>

    <h2> <?php saludo("Manuel") ?>. </h2>
</body>
</html>