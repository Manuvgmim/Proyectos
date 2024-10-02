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

        function parseDefaultLanguage($http_accept, $deflang = "en") {

            if (isset($http_accept) && strlen($http_accept) > 1)  {
        
            $x = explode(",",$http_accept);
        
            foreach ($x as $val) {
        
                if (preg_match("/(.*);q=([0-1]{0,1}.\d{0,4})/i",$val,$matches)) {
        
                    $lang[$matches[1]] = (float)$matches[2];
                } 
                else {
        
                    $lang[$val] = 1.0;
                }
            }
            }
        }

        function idiomaNavegador(){
            return parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
        }

        $idioma = idiomaNavegador();

        $texto = "estudios_". $idioma;

        echo $$texto;
    ?>
</body>
</html>