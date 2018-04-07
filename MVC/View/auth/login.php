<div class="col-md-2">
	
</div>
<div class="col-md-8">
	




		<form action="./?controller=Login&method=login" method="POST">
			<div class="panel-login">
				<div class="panel-body" style="margin-top: 20px;">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								<label for="correo"  class="text-label">Usuario</label>
								<input type="email" name="correo" class="form-control" style="background-color: rgba(0,0,0,0)">

							</div>
						</div>			
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12">
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
						<div class="col-md-12 col-xs-12">
							<input type="submit" class="btn btn-dark" style="width: 100%" value="Enviar" ></input>
						</div>
					</div>
				</div>
			</div>
		</form>

</div>
