<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo Ejecucion</title>
</head>
<body>
<!-- Se pueden tener varios boques de php -->
    <?php 
    
        /* function dameDatos(){

            echo "Este es el mensaje del interior de la funcion <br>";
        } */
    
    ?> 

    <?php 

        echo "Este es el primer mensaje <br>";
    
        //dameDatos();

        /*La diferencia entre require y include es:
        
        include ("proporciona_datos.php");

        require ("proporciona_datos.php");

        Con include no encuentra el archivo pero el resto se ejecuta
        Con require no ejecuta nada a partir del error
        */
        
        include ("proporciona_datos.php");
        

        echo "Este es el segundo mensaje <br>";

        dameDatos();

    ?>

</body>
</html>