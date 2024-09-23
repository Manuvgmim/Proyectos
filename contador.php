<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
    

    for ($i=1; $i <= 100; $i++) { 
        if($i == 100){
            echo"$i<br>";
        }else{
            echo"$i,";
        }
    }

    $num = 10;
    while($num >= 0 ){
        if($num == 0){
            echo"$num";
        }else{
            echo"$num-";
            
        }
        $num--;
    }
    
    ?>
</body>
</html>