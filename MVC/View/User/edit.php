<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="nombre" value="<?php echo $u['nombre'];?>" class="form-control">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Correo</label>
			<input type="text" name="correo" value="<?php echo $u['correo'];?>" class="form-control">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Tipo</label>
			<select name="tipo" id="tipo" class="form-control">
				<?php 
					foreach ($tipos as $key => $tipo) {
						?>
							<option <?php echo $tipo['id']==$u['tipo']?' selected ':' '; ?> value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre'] ?></option>
						<?php
					}
				 ?>

			</select>
		</div>
	</div>
</div>