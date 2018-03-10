<?php
	//isset VERIFICA SI ESTA DEFINIDA O NO UNA VARIABLE
	//empty VERIFICA SI ESTA VACIA O NULA 
	if(isset($_POST['correo']) && 
		isset($_POST['password'] ) && 
		!empty($_POST['correo']) && 
		!empty($_POST['password'])
		 ){
		
		include('../config/conexion.php');
		$correo=$_POST['correo'];
		$password=$_POST['password'];
		$sql="SELECT * FROM User where correo='".$correo."'";
		$resultado=mysqli_query($conexion,$sql);
		if(mysqli_num_rows($resultado)>0){
			$registro=mysqli_fetch_array($resultado);
			if($password==$registro['password']){
				header('Location: ../dashboard.php');
			}else{
				header('Location: ../index.php?error=Error&tipo=password');
			}
		}else{
				header('Location: ../index.php?error=Error&tipo=correo');
		}


	}else{
		header('Location: ../index.php?error=Error&tipo=parametros');
	}	
?>