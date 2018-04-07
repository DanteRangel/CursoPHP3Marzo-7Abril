<?php 
		require_once(APP_PATH.'/config/Model.php');

		Class User extends Model{
			public $table="User";
			public $atributos=['id','nombre','password','correo','tipo'];
			public $primaryKey="id";
			
		}
 ?>