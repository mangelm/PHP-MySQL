<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo_ambitos</title>
</head>
<body>

    <?php

        $nombre="Angel";
        
        function dameNombre(){

            //Añadiendo global pilla la variable del exterior de la funcion

            global $nombre;

            $nombre = "El nombre es " . $nombre;
        } 

        //include ("datos_otros.php");

        dameNombre();

        echo $nombre;
    ?>

</body>

</html>