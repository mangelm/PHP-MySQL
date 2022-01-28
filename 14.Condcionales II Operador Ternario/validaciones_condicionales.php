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
        
        //$edad=$_POST["edad_usuario"];
    /*  if($edad<18){
            
            echo "Eres menor de edad.No tienes acceso";
        
        }else{

            echo "Eres mayor de edad.Puede acceder";

        } */

        //echo $edad<18 ? "Eres menor de edad.No puedes acceder" : "Puedes acceder";
        //$resultado = $edad<18 ? "Eres menor de edad.No puedes acceder" : "Puedes acceder";
        //echo $resultado;

        $contra=$_POST["contra"]; //lo que se le envia es el name

        $nombre=$_POST["nombre_usuario"];

        $resultado = $nombre=="Angel" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder";

        echo $resultado;
    }
?> 