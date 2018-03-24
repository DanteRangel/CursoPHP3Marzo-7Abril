<?php 
		require_once(APP_PATH.'/config/Model.php');

		Class Tipo extends Model{
			public $table="Tipo";
			public $atributos=['id','nombre'];
			public $primaryKey="id";
		}
 ?>