<?php

    //Clase
    class Coche{

        //Caracteristicas/Propiedades
        //Encapsulando para que no se pueda modificar desde fuera de la clase
        //NO podemos acceder mirar la carpeta 25
        //private $ruedas;

        //Es accesible desde la clase principal y sus herencias
        protected $ruedas;

        var $color;

        protected $motor;

        //Funcionalidades/Metodos

        function Coche(){
            //Metodo constructor tiene que tener mismo nombre que clase en el php antiguo
            //Estado inicial
         
            $this->ruedas=4;

            $this->color="";

            $this->motor=1600;
            
        }

        function get_motor(){

            return $this->motor;
        }

        function get_ruedas(){

            return $this->ruedas;
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
        
        function set_color($color_coche,$nombre_coche){
        
        	$this->color=$color_coche;
            
            //echo "El color de este coche es:" . $this->color . "<br>";
            
            echo "El color de: " . $nombre_coche . " es: " . $this->color . "<br>";
        }
    }

    //Clase
    class Camion extends Coche{


        function Camion(){
            //Metodo constructor tiene que tener mismo nombre que clase en el php antiguo
            //Estado inicial
            $this->ruedas=8;

            $this->color="gris";

            $this->motor=1600;
            
        }


        //Sobreescribir la herencia        
        function set_color($color_camion,$nombre_camion){
        
        	$this->color=$color_camion;
            
            //echo "El color de este coche es:" . $this->color . "<br>";
            
            echo "El color de: " . $nombre_camion . " es: " . $this->color . "<br>";
        }

        //Llamando al metodo de la clase padre (coche) para modificarlo
        function arrancar(){

            parent::arrancar();

            echo "Camión arrancado";
        }
         
    }

?>     
