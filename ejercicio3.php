<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>

    <?php
    $num1 = 3;
    $num2 = 5;
    $num3 = 8;
    $num1 *= 4;
        echo $num1;
        //Printea num1 11
        echo $num1 <= $num2;
        //false
        echo $num3 > $num1 and $num3 > $num2;
        //False
        echo $num3 > $num1 or $num3 > $num2;
        //True
        echo $num1 > $num2 xor $num1 > $num3;
        //False
        $num3--;
        echo $num3;
        //7
        $num3 += $num1;
        echo $num3;
         //19
?>
</body>
</html>