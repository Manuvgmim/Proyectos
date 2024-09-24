<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador funciones</title>
</head>
<body>
    
    <?php
        function cuenta($a,$b){

            if($a < $b){
                while($a < $b){
                    echo $a,",";
                    $a++;
                }
                echo $b;
            }else{
                while($a > $b){
                    echo $a,",";
                    $a--;
                }
                echo $b;
            }
            
        }
    ?>

        <h1>Contador</h1>

        <p> <?php cuenta(20,10) ?> </p>
</body>
</html>