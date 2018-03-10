<?php 

	$host="127.0.0.1";//36.32.124.124
	$pass="311332065";
	$user="root";
	$database="CursoPHP";

	$conexion=mysqli_connect($host,$user,$pass,$database) or die("Error en la conexion");
/*
	$sql="SELECT * FROM User";
	$resultado=mysqli_query($conexion,$sql);
	#var_dump(mysqli_fetch_array($resultado));
	
	while($elemento=mysqli_fetch_array($resultado)){
		echo $elemento['nombre'].'<br>';
	}
	$resultado=mysqli_query($conexion,$sql);
	$elementos=mysqli_fetch_array($resultado);
	var_dump($elementos);
	foreach ($elementos as $key => $value) {
		echo 'Columna['.$key.'] = '.$value.'<br>';
	}
*/
?>