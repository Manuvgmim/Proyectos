<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
</head>
<body>
    <h1>Prueba if</h1>
    <?php 
    $nota1 = 5;
    $nota2 = 9;
    if ($nota1 < $nota2)
    {
        echo "$nota1 es menor que $nota2";
    }
    else
    {
        echo "$nota1 es mayor que $nota2";
    }
    
    ?>
</body>
</html>