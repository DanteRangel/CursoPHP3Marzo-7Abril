<?php 
		require_once(APP_PATH.'/config/Model.php');

		Class Chat extends Model{
			public $table="Chat";
			public $atributos=['id','ticket','id_envia','id_recibe','titulo','hora'];
			public $primaryKey="id";

			public function getTickets($id){
				$sql='SELECT ticket,COUNT(*) as "no_mensajes"  FROM '.$this->table.' WHERE id_envia='.$id.' OR id_recibe='.$id.' GROUP BY(ticket)';
				$resultado=$this->con->query($sql);
				$result=[];
				$i=0;
				while($row=$resultado->fetch_assoc()){
					$result[$i]=$row;
					$i++;
				}

				return $result;
			}
			
		}
 ?>