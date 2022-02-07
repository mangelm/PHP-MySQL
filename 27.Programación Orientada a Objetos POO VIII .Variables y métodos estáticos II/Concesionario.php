<?php

	class Compra_vehiculo{
		
		private $precio_base;

		//Se comparte con todos los de la misma clase,y solo accesible desde esta clase
		private static $ayuda=0;
		
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		//Metodo estatico
		static function descuento_gobierno(){

			/* 
			//Fecha actual
			if(date("m-d-y")>"07-02-22"){
				self::$ayuda=4500;
			} */

			//Fecha superior a la actual
			if(date("m-d-y")>"08-01-22"){
				self::$ayuda=4500;
			}
			

			
		} 



		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			//self:: hacer referencia a un campo static
			$valor_final=$this->precio_base-self::$ayuda;
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase

?>