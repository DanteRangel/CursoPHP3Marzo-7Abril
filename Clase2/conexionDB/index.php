<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		body{
			background-image:url('https://i.pinimg.com/originals/93/e9/a2/93e9a2d148106beec03bce90e473324a.jpg'); no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;	
		}
		.text-label{
			color:white;
		}
		.panel-login {
			background-color: rgba(0,0,0,0.4);
			margin-top: 120px;
			color: white;
			border-radius: 16px;
			padding: 5px 15px;
		}
	.panel-login>.panel-heading hr {}
	</style>
</head>
<body>
	<div class="container">
		<form action="auth/login.php" method="POST">
			<div class="panel-login">
				<div class="panel-body" style="margin-top: 20px;">
					<div class="row">
						<div class="col-md-6 offset-md-3 col-xs-12">
							<div class="form-group">
								<label for="correo"  class="text-label">Usuario</label>
								<input type="email" name="correo" class="form-control" style="background-color: rgba(0,0,0,0)">

							</div>
						</div>			
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-3 col-xs-12">
							<div class="form-group <?php echo (isset($_GET['error']) &&
										isset($_GET['tipo']) &&
										$_GET['tipo']=='password')?'has-danger':'';?>">
								<label for="password" class="text-label" >Contraseña</label>
								<input type="password" name="password" class="form-control" style="background-color: rgba(0,0,0,0)">
								<?php
									if(isset($_GET['error']) &&
										isset($_GET['tipo']) &&
										$_GET['tipo']=='password'){
											?>
										<span>
											<strong>Contraseña  incorrecta</strong>
										</span>
										<?php
									}
								?>
							</div>
						</div>			
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-3 col-xs-12">
							<input type="submit" class="btn btn-dark" style="width: 100%" value="Enviar" ></input>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>