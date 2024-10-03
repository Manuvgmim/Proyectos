<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    <?php 
        include_once "persona.php";
        include_once "estudiante.php";
    ?>
</head>
<body>
    <h1>Clases</h1>
    <?php 
        $persona = new Persona("12345678P","Manuel","frn@gmail.com");
        $estudiante = new Estudiante("12325678P","Jesus","Fran@gmail.com","34");
        $persona->Mostrar();
        echo "<br>";
        $estudiante->Mostrar();
        echo "<br>";

        $persona->setMail("MAnuel@gmail.com");

        
        $estudiante->setNombre("Carmen");
        
        $persona->Mostrar();
        echo "<br>";
        $estudiante->Mostrar();

    ?>
</body>
</html>