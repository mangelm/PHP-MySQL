<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Variable Estatica</title>
</head>
<body>
<?php

    function incrementarVariable(){

        //QUe se ejecute una vez y cuando termine funcion valor se conserva
        static $contador=0; 

        $contador++; //De Incremento

        echo $contador . "<br>";
    }

    incrementarVariable();

    incrementarVariable();

    incrementarVariable();

    incrementarVariable();
?>
</body>
</html>