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
	//if(isset($_POST'mes']))
	$cursos=[
		1,2,3,4,5,6,"as","asd",1.3,true
	];
	$cursosAs=[
		[
		'id'=>'1',
		'nombre'=>'Curso de PHP desde cero'
		],
		[
		'id'=>'2',
		'nombre'=>'Frameworks PHP'
		],
		[
		'id'=>'3',
		'nombre'=>'Java Basico'
		]
		,
		[
		'id'=>'4',
		'nombre'=>'Android'
		]
	];
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
		<div class="row">
			<h1>FOR</h1>
			<table class="table table-responsive">
				<thead>
					<th>
						Id
						
					</th>
					<th>Nombre</th>
				</thead>
				<tbody>
				<?php for ($i=0; $i <count($cursosAs) ; $i++) { 
				
				?>
					<tr>
						<td><?php echo $cursosAs[$i]['id'];?></td>
						<td><?php echo $cursosAs[$i]['nombre'];?></td>
					</tr>
				<?php 
				}
				?>
				</tbody>
			</table>
			<h1>FOREACH</h1>
			<table class="table table-responsive">
				<thead>
					<th>id</th>
					<th>Nombre</th>
				</thead>
				<tbody>
					<?php foreach ($cursosAs as $llave => $valor) {
						# code...
					?>
						<tr>
							<td><?php echo $valor['id'];?></td>
							<td><?php echo $valor['nombre'];?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<h1>WHILE</h1>
			<table class="table table-responsive">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
				</thead>
				<tbody>
					<?php 
						$i=0;
						while ($i<count($cursosAs)) {
							
					?>
						<tr>
							<td><?php echo $cursosAs[$i]['id'];?></td>
							<td><?php echo $cursosAs[$i]['nombre'];?></td>
						</tr>
					<?php
						$i++;
						}
					?>
				</tbody>
			</table>
			<h1>DO WHILE</h1>
			<table class="table table-responsive">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
				</thead>
				<tbody>
					<?php 
						if(count($cursosAs)>0){
							$i=0;
							do{
								?>
								<tr>
									<td><?php echo $cursosAs[$i]['id'];?></td>
									<td><?php echo $cursosAs[$i]['nombre'];?></td>
								</tr>
					<?php
								$i++;
							}while($i<count($cursosAs));
						}
					?>
					
				</tbody>
			</table>
		</div>

		<form action="" method="POST">
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
		<div class="row">
			
		</div>
	</div>
</body>
</html>