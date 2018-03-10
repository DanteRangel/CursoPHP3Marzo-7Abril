<?php 
	include('./Persona.php');
	#use Name\Persona;

	Class Alumno extends Persona{
		// Sobre escritura
		public function saludar($nombre){
			echo "<br>Que tranza ".$nombre."!!! Mi nombre ".$this->getNombre();
			#echo "Que tranza $nombre!!!";
		}
		public function oseo(){
			$this->correr(1.4);
		}
	}
	




	$alumno=new Alumno();
	$persona=new Persona("Dante Rangel");
	$alumno->oseo();
	#$persona->saludar("Pedro");
	#$alumno->saludar("Juan");

	$arreglo=[$persona,$alumno];

	foreach ($arreglo as $key => $value) {
		$value->saludar("Esther");
	}




	
	#var_dump($alumno);




?>