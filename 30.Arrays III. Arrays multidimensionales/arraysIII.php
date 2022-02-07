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
   
   //Array multidimensional
   $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "citrico"=>"mandarina",
                                    "otros"=>"manzana"),
                    "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                    "carne"=>array("vacuno"=>"lomo",
                                  "porcino"=>"pata"));

  //Acceder a los elementos
  //echo $alimentos["carne"]["vacuno"];

/*   //Recorrer clave alim, primera dimension de la raid, y $alim para la segunda dimension
  foreach($alimentos as $clave_alim=>$alim){

    echo "$clave_alim:<br>";

    //Para cada alim muestra su elemento en la lista mientras queden elementos en la lista
    while(list($clave,$valor)=each($alim)){

      echo "$clave=$valor<br>";

    }

    echo "<br>";
  } */

  //Forma simplificada

  echo var_dump($alimentos);


?>
</body>
</html>