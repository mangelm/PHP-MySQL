<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos de Strings</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight: bold;
        }
    </style> 
</head>
<body>
<?php

    //$nombre = "Angel";

    //echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    //Escape de caracteres \"resaltar\"
    //echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
   // echo "Hola $nombre";

   $variable1 ="casa";
   $variable2= "CASA";

   //Devuelve 1 si no son iguales y 0 si son iguales
   $resultado=strcmp($variable1,$variable2); 
   $resultado2=strcasecmp($variable1,$variable2);

  /*  echo "El resultado es " . $resultado;
   echo "El segundo resultado es " . $resultado2; */

/*    if($resultado){

    echo "No coinciden";
   }else{
    echo "Coinciden";
   }

   if($resultado2){

    echo "No coinciden";
   }else{
    echo "Coinciden";
   } */

   //Decimos que si no es
   if(!$resultado){

    echo "Coinciden<br>";
   }else{
    echo "No coinciden<br>";
   }

   if(!$resultado2){

    echo "Coinciden<br>";
   }else{
    echo "No coinciden<br>";
   } 

?>
</body>
</html>