<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prioridad Operadores</title>
</head>
<body>
<?php
 
 $var1 = true;
 
 $var2 = false;

 //$resultado=$var1 && $var2; //resultado=false;
 $resultado=$var1 and $var2;

 if($resultado==true){

    echo "Correcto";
 }else{

    echo "Incorrecto";
 }


?>  
</body>
</html>