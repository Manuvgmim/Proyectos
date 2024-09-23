<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contadores</h1>
    <?php
    
    echo"<h2>Bucle for</h2>";
    for ($i=1; $i <= 100; $i++) { 
        if($i == 100){
            echo"$i<br>";
        }else{
            echo"$i,";
        }
    }

    echo"<h2>Bucle while</h2>";
    $num = 10;
    while($num >= 0 ){
        if($num == 0){
            echo$num;
        }else{
            echo"$num-";
            
        }
        $num--;
    }
    
    ?>
</body>
</html>