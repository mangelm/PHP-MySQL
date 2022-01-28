<style>
        h1{
            text-align:center;
        }

        table{
            background-color:#FFC;
            padding:5px;
            border:#666 5px solid;
        }

        .no_validado{
            font-size: 18px;
            color:#F00;
            font-weight:bold;
        }

        .validado{
            font-size: 18px;
            color:#0C3;
            font-weight:bold;
        }
</style>

<?php

    if(isset($_POST["enviando"])){

        /************************************
         * Esctructura con {} 1 condicion
         **************************************/
        /* 
            $nombre= $_POST["nombre_usuario"];

            switch($nombre){
            
            case "Angel":

                echo "Usuario autorizado Hola Angel";
                
                break;

            case "Maria":

                echo "Usuario autorizado. Hola María";

                break;
            
            case "Pedro":

                echo "Usuario autorizado Hola Pedro";
                    
                break;

            default:
            
                echo "Usuario no autorizado";
        } */

          /************************************
         * Esctructura con {} + de 1 condicion
         **************************************/
       /*  
            $contra = $_POST["contra_usuario"];
            $nombre= $_POST["nombre_usuario"];
        
            switch(true){
            
            case $nombre=="Angel" &&contra=='1234':

                echo "Usuario autorizado Hola Angel";
                
                break;

            case $nombre=="Maria" &&contra=='5555':

                echo "Usuario autorizado. Hola María";

                break;
            
            case $nombre=="Pedro" &&contra=='1111':

                echo "Usuario autorizado Hola Pedro";
                    
                break;

            default:
            
                echo "Usuario no autorizado";
        }  */

        /*****************************
         * Esctructura con endswitch
         ******************************/
        
        /*
        $contra = $_POST["contra_usuario"];
        $nombre= $_POST["nombre_usuario"];

        switch(true):
            
            case $nombre=="Angel" &&contra=='1234':

                echo "Usuario autorizado Hola Angel";
                
                break;

            case $nombre=="Maria" &&contra=='5555':

                echo "Usuario autorizado. Hola María";

                break;
            
            case $nombre=="Pedro" &&contra=='1111':

                echo "Usuario autorizado Hola Pedro";
                    
                break;

            default:
            
                echo "Usuario no autorizado";
        
        endswitch; */

         /*****************************
         * Ejemplo Edades
         ******************************/
        $edad = $_POST["edad_usuario"];
        $nombre= $_POST["nombre_usuario"];

        switch(true):
            
            case $edad<=18:

                echo "Eres menor de edad";
                
                break;

            case $edad<=40:

                echo "Eres Joven";

                break;
            
            case $edad<=65:

                echo "Eres Maduro";
                    
                break;

            default:
            
                echo "Cuidate";
        
        endswitch;




    }
?> 