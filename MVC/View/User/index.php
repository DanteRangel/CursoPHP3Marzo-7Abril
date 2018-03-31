<div class="row"  style="text-align: right;">

	<a href="./?controller=User&method=show" class="btn btn-success">Agregar  Usuario</a>

	<button onclick="deleteAll();" class="btn btn-warning">Eliminar  Usuario</button>
</div>
<div class="row">
	<div class="col-md-12">
		<h1>Numero de columnas: <span id="contador"><?php echo count($users); ?> </span></h1>
	
	</div>
</div>
<div class="row">
	<table class="table-responsive table">
		<thead>
			<th></th>
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
			<tr id="tr_<?php echo $value['id'];?>" class="tablita" data-id="<?php echo $value['id'];?>">
				<td><input type="checkbox" class="checkbox check_dante" data-id="<?php echo $value['id']; ?>"></td>
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
				" class="btn btn-danger">Eliminar</a>
				<button onclick="alerta(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</button></td> 	  	 
			</tr>
			<?php 
			}
			 ?>
		</tbody>
	</table>
</div>
<script>
	$(document).ready(function(){
		contador=<?php echo count($users); ?>;
	});
	function deleteAll(){
		
		//$('.tablita').remove();
		var ids=[];
		//   . CLASES
		//   # ID
		//   input [type:text]

		$('.check_dante:checked').each(function(key,value){
			id=$(this).attr('data-id');
			ids.push(id);
		});
		$.ajax({
			url:'./?controller=User&method=destroy',
			type:'POST',
			data:{id:ids},
			success:function(response){
				
				ids.forEach(function(valor){
					$('#tr_'+valor).remove();
				});
				$('#contador').html( $('.tablita').length);
				contador= $('.tablita').length;


			}
		});
		console.log(ids);
	}
	function alerta(id){
	//	$('#tr_'+id).remove();
		//$('#tr_'+id).css('color','blue');
		//$('#tr_'+id).addClass("btn");
		//$('#tr_'+id).html('');
		contador--;
		$('#contador').html(contador);
	//	$('#tr_'+id).hide('slow');//display:none;

		//url
		//data
		//type HTTP
		// success
		// error
		/*
		var a={
			nombre:'dante',
			edad:[],
			tipo:{
				nombre:'Administrador'
			}
		};*/
//		a.tipo.nombre;
		$.ajax({
			url:'./?controller=User&method=delete&id='+id,
			data:'',
			type:'GET',
			success:function(response){
				if(response){
					$('#tr_'+id).remove();
				}else{
					alert('Algo salio mal');
				}
			}
		});

	}
</script>
