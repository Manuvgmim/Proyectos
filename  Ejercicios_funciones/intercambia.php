<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambia</title>
</head>
<body>
    <h1>Intercambio de valor de números</h1>
    <?php 
        function intercambia(&$a,&$b){
            $c = $a;
            $d = $b;
            $b = $c;
            $a = $d;
        }
        $a = 2;
        $b = 100;
        echo"A = $a <br> B = $b ";
        intercambia($a,$b);   
        echo"<br> A = $a <br> B = $b ";
    ?>

</body>
</html>