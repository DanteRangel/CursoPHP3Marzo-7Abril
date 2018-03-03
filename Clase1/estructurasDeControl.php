<?php

	if(count($_POST)>0){
		echo "Si me llego lo que sea por post";
		print_r($_POST);
		return;
	}
	if(count($_GET)>0){
		echo "Si me llego lo que sea por get";
		print_r($_GET);
		return;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="" method="GET">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="form-group">
						<label for="">Apellido</label>
						<input type="text" class="form-control" name="apellido">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="form-group">
						<label for="">Correo</label>
						<input type="text" class="form-control" name="correo">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<div class="form-group">
						<input type="submit" class="btn btn-default" name="Enviar">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>