<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso constantes</title>
</head>
<body>
<?php
    
    //Crear una constante
    //define("AUTOR","Angel");
    //Crear constante independetemente de mayuscula
    //define("AUTOR","Angel",true);

    //define("AUTOR","Maria");
    //echo AUTOR;

    //echo "El autor es: AUTOR";

    //echo "El autor es : " . AUTOR;

    //echo "El autor es : " . AUTOR;
    
    //echo "El autor es : " . autor;

    //Hay constantes ya definidas llamadas constantes magicas

    echo "La linea de esta instrucción es: " . __LINE__ . "<br>";
    
    echo "Estamos trabajando con este fichero: " .  __FILE__;
?>
</body>
</html>