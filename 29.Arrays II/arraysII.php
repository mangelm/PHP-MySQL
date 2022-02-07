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
    //Array asociativa, intentar no repetir el mismo nombre que asocias
    /* $datos=array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);

    $datos["Pais"]="España"; */
    //$datos="Martín";

    //echo $datos;


    //Devuelve true o false segun sea una array o no
    /*if(is_array($datos)){

      echo "Es un Array";
    }else{

      echo "No es un Array";
    }; */


    //Recorrer los elementos de una Array asociativa
/*    foreach($datos as $clave=>$valor){

      echo "A $clave le corresponde $valor <br>";
    }  */


//Array indexada

   /* $semana[]="Lunes";

    $semana[]="Martes";

    $semana[]="Miercoles";

    $semana[]="Jueves";
    */
    //Si sabemos los elementos
    /* for($i=0;$i<4;$i++)
    {
      echo $semana[$i] . "<br>";
    } */

    //Si no sabemos cuantos elementos tiene 
    /*for($i=0;$i<count($semana);$i++)
    {
      echo $semana[$i] . "<br>";
    }*/

    //Agrega el elemento al final de la array Indexada
    /*$semana[]="Viernes";

    for($i=0;$i<count($semana);$i++)
    {
      echo $semana[$i] . "<br>";
    } */

    $semana=array("Lunes","Martes","Miércoles","Jueves");

    //Ordenar por orden alfabetico
    sort($semana);

    //Recorriendo
    for($i=0;$i<count($semana);$i++)
    {
      echo $semana[$i] . "<br>";
    }

    





?>
</body>
</html>