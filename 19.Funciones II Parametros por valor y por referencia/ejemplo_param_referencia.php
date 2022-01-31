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

    /*********************** 
        Funcion por parametro
    ************************/ 

    /*function incrementa($valor1){
        
        $valor1++;

        return $valor1;
        }
 
        $numero=5;

        echo incrementa($numero) . "<br>";

        echo $numero;
 
    */


    /*********************** 
        Funcion por refencia
    ************************/

    //Con esto hacemos como una conexion entre dos variables y la funcion tiene en cuenta
    //lo exterior a ella
    function incrementa(&$valor1){
        
        $valor1++;

        return $valor1;
    }
 
    $numero=5;


    echo incrementa($numero) . "<br>";

    echo $numero;


?>     
</body>
</html>