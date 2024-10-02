<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1>Coches</h1>
    <?php
        $coches = array(
            "111BCD" => array("Ford","Focus",5),
            "345RFG" => array("Opel","Corsa",5),
            "166HYJ" => array("Citroen","N",3)
        );       
    function ordenarYMostrar($array){
        
        ksort($array);
        foreach($array as $matricula => $datos){
            echo "Coche con matricula: ";
            echo $matricula. "<br>";
            echo "Marca: ". $datos[0]. "<br>";
            echo "Modelo: ". $datos[1]. "<br>";
            echo "Nº puertas: ". $datos[2]. "<br>";
            echo "<br>";
        }
    }      
    ?>
    <h3> <?php ordenarYMostrar($coches);?></h3>
</body>
</html>