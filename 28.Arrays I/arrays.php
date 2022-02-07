<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    //Array indexada
    //No hay indice porque lo entiende por orden, aunque se pueden poner si quieres
 /*   
    //Opcion 1
    $semana[]="Lunes";
    
    $semana[]="Martes";

    $semana[]="Miercoles";

    echo $semana[1]; 
    
    
    //Opcion 2
    $semana[0]="Lunes";
    
    $semana[1]="Martes";

    $semana[2]="Miercoles";

    echo $semana[1]*/

    //Opcion 3
  /*   $semana=array("Lunes","Martes","Miercoles","Jueves");

    echo $semana[3]; */

    //Array asociativa, intentar no repetir el mismo nombre que asocias
    $datos=array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);

    echo $datos["Apellido"];

    



?>
</body>
</html>