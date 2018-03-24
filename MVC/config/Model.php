<?php 
	include 'Conexion.php';
	Class Model extends Conexion{
		public $atributos=[];
		public $primaryKey;
		public $table;


		public function all($attr=array()){
			
			if(count($attr)>0){
				$sql="SELECT ".$this->array__find_convertion($attr,false)." FROM ".$this->table;
			}else{
				$sql="SELECT  * FROM ".$this->table;	
			}

			$resultado=$this->con->query($sql);
			$result=[];
			$i=0;
			while($row=$resultado->fetch_assoc()){
				$result[$i]=$row;
				$i++;
			}

			return $result;


		}
		public function find($id){
			$sql='SELECT * FROM '.$this->table.' WHERE id='.$id;
			$resultado=$this->con->query($sql);
			return $resultado->fetch_assoc();
		}

		public function array__find_convertion($attr=array(),$bandera){
			$sql=''; 	 	 
			for($i=0; $i<count($attr);$i++){
				if($bandera==true)
					$sql.='"'.$attr[$i].'"';
				else
					$sql.=$attr[$i];
				if($i<count($attr)-1){
					$sql.=',';
				}
			}
			return $sql;
		}
		public function save($attr=array()){
			if(count($attr)>0){
				$sql="INSERT INTO ".$this->table." (".$this->array__find_convertion(array_keys($attr),false ).") VALUES(".$this->array__find_convertion(array_values($attr),true).")";
				$resultado=$this->con->query($sql);
				return $resultado;
			}


		}
		public function delete($id){
			$sql='DELETE FROM '.$this->table.' where id='.$id;
			$resultado=$this->con->query($sql);
			return $resultado;

		}



	}



 ?>