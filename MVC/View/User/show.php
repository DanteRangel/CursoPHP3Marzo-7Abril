<form action="./?controller=User&method=store" method="POST">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" value="" class="form-control">
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label for="">Correo</label>
				<input type="text" name="correo" value="" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" name="password" value="" class="form-control">
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
								<option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre'] ?></option>
							<?php
						}
					 ?>

				</select>
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<input style="width: 100%;margin-top: 2em;" type="submit" class="btn btn-success" value="Enviar">
		</div>
	</div>

</form>