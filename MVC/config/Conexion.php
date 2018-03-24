<?php 

	Class Conexion{
		public $host;
		public $password;
		public $user;
		public $driver;
		public $database;
		public $con;

		public function __construct(){
			$credenciales=include 'database.php';
			$this->host=$credenciales['host'];
			$this->password=$credenciales['password'];
			$this->user=$credenciales['user'];
			$this->driver=$credenciales['driver'];
			$this->database=$credenciales['database'];
			$this->con=$this->getCon();

		}
		public function getCon(){
			switch ($this->driver) {
				case 'mysql':
					return new mysqli($this->host,$this->user,$this->password,$this->database);
					break;
				
				case 'db2':
					# code...
					break;

				case 'oracle':
					# code...
					break;
				default:
					return new mysqli($this->host,$this->user,$this->password,$this->database);
				break;
			}			
		}
	}

 ?>