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

    //Clase
    class Camion{

        //Caracteristicas/Propiedades
        var $ruedas;

        var $color;

        var $motor;

        //Funcionalidades/Metodos

        function Camion(){
            //Metodo constructor tiene que tener mismo nombre que clase en el php antiguo
            //Estado inicial
            $this->ruedas=8;

            $this->color="gris";

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

?>     
