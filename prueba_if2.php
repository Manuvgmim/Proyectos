<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
</head>
<body>
    <h1>Prueba if 2</h1>
    <?php 
    $nota1 = rand(0,10);
    $nota2 = rand(0,10);
    $nota3 = rand(0,10);
    

    if ($nota1 >= $nota2 && $nota1 >= $nota3) {
        $notaAlta = $nota1;
    } elseif ($nota2 >= $nota1 && $nota2 >= $nota3) {
        $notaAlta = $nota2;
    } else {
        $notaAlta = $nota3;
    }
    
    

    echo"</br> $notaAlta es la nota mas alta</br>";
    
    
        switch ($notaAlta) {
            case ($notaAlta < 5):
                echo "Insuficiente $notaAlta";
                break;
            
            case ($notaAlta >= 5 && $notaAlta < 6):
                echo "Suficiente $notaAlta";
                break;
                
            case ($notaAlta >= 6 && $notaAlta < 7):
                echo "Bien $notaAlta";
                break;
                
            case ($notaAlta >= 7 && $notaAlta < 9):
                echo "Notable $notaAlta";
                break;
        
            case ($notaAlta >= 9):
                echo "Sobresaliente $notaAlta";
                break;
        }
    
    
    ?>
</body>
</html>