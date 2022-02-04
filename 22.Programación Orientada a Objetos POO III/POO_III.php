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
        
        function establece_color($color_coche,$nombre_coche){
        
        	$this->color=$color_coche;
            
            //echo "El color de este coche es:" . $this->color . "<br>";
            
            echo "El color de: " . $nombre_coche . " es: " . $this->color . "<br>";
        }
    }
    

   //Intancia
    $renault=new Coche(); //Estado inicial al objeto o instancia 

    $mazda=new Coche(); 

    $seat=new Coche();

    //Dandole cualidades a la instancia

	//$renault->establece_color("Rojo");
    
    $renault->establece_color("Rojo","Renault");
    
    //$renault->establece_color("Azul");
    
    $renault->establece_color("Azul","Seat"); */


?>     
</body>