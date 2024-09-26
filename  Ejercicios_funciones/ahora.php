<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahora</title>
</head>
<body>
    <h1>Fecha actual</h1>

    <?php 
        date_default_timezone_set('Europe/Madrid');

        $formatoActual = date("d M Y - H:i:s");

        echo $formatoActual;
        
    ?>
</body>
</html>