<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculaDescuento</title>
</head>
<body>
    <h1>Calculadora descuento</h1>
    <?php 
        include "funciones.inc";

        $precio = 250;
        $descuento = 10;

        echo"$precio con un descuento del $descuento% se queda en " .calculaDescuento($precio,$descuento) ."€";
    ?>

</body>
</html>