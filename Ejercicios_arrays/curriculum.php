<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
</head>
<body>
    <?php 
        $estudios_es = "Educación secundaria obligatoria y Grado Medio SMR";
        $estudios_en = "Compulsory secondary education and Intermediate Grade SMR";

        $idioma = $_GET["idioma"];

        $texto = "estudios_". $idioma;

        if (isset($estudios[$idioma])) {
            echo "<p>$texto</p>";
        } else {
            echo "<p>Idioma no soportado</p>"; 
        }
    ?>
</body>
</html>