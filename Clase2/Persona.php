<?php
	Class Persona{
		//CARACTERISTICAS 
		//-----Atributos------

		private $nombre,$edad,$genero,$estadoCivil,$nacionalidad,$peso;
		private $distanciaRecorrida;
		// COMPORTAMIENTO
		#----- Metodos
		//En constructor se recomienda inicializar variables-atributos
		public function __construct($nombre="Invitado"){
			$this->nombre=$nombre;
			$this->distanciaRecorrida=0;

		}
		public function comer(){
			echo "Yo estoy comiendo";
		}

		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		public function getNombre(){
			return $this->nombre;
		}
		// En kilometros
		public function correr($distancia){
			$this->distanciaRecorrida+=($distancia*1000);
			echo "<br>Incremento: ".($distancia*1000);
			echo "<br>Distancia recorrida: ".$this->distanciaRecorrida.' metros';
		}
		public function saludar($nombre){
			echo ' Bienvenida '.$nombre." Hola mi nombre es:".$this->nombre;
		}

	}

	/*$persona=new Persona("Dante Rangel");
	#$persona->nombre="Dante Rangel";
	//$persona->setNombre("Dante Rangel");
	echo $persona->getNombre();
	$persona->correr(2);
	$persona->correr(3);
	$persona->correr(5);
	echo '<br>';
	var_dump($persona);
	$persona->comer();

*/
?>