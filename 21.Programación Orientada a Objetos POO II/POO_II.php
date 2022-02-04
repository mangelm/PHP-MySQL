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

    //Clase
    class Coche{

        //Caracteristicas/Propiedades
        var $ruedas;

        var $color;

        var $motor;

        //Funcionalidades/Metodos

        function Coche(){
            //Metodo constructor tiene que tener mismo nombre que clase en el php antiguo
            //Estado inicial
            $this->ruedas=4;

            $this->color="";

            $this->motor=1600;
            
        }

        function arrancar(){

            echo "Estoy arrancado <br>";
        }

        function girar(){

            echo "Estoy girando <br>";
        }

        function frenar(){  

            echo "Estoy frenando <br>";

        }
    }
    

    //Intancia
    $renault=new Coche(); //Estado inicial al objeto o instancia 

    $mazda=new Coche(); 

    $seat=new Coche();

    $mazda->girar();

    echo $mazda ->ruedas;
?>     
</body>