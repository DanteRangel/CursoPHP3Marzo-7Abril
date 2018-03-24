<div class="row"  style="text-align: right;">
	<a href="./?controller=User&method=show" class="btn btn-success">Agregar  Usuario</a>
</div>
<div class="row">
	<table class="table-responsive table">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php 
			foreach ($users as $key => $value) {
				# code...
		
			 ?>
			<tr>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['nombre'];?></td>
				<td><?php echo $value['correo'];?></td>
				<td>
					<?php 
					foreach ($tipos as  $key => $tipo) {
						if($value['tipo']==$tipo['id']){
							echo $tipo['nombre'];
						}
					}
					 ?>
				</td>
				<td><a href="./?controller=User&method=edit&id=
				<?php echo $value['id']; ?>
				" class="btn btn-info">Editar</a>
				<a href="./?controller=User&method=delete&id=
				<?php echo $value['id']; ?>
				" class="btn btn-danger">Eliminar</a></td> 	  	 
			</tr>
			<?php 
			}
			 ?>
		</tbody>
	</table>
</div>