<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
	<?php 
		if(isset($_GET['success']) && !empty($_GET['success'])){


	 ?>
			<div class="alert alert-success">
			  <strong>Exito!</strong> <?php echo $_GET['success']; ?>
			</div>
	<?php 
	}
	 ?>
	<?php 
		if(isset($_GET['error']) && !empty($_GET['error'])){


	 ?>
			<div class="alert alert-danger">
			  <strong>Eliminado!</strong>  <?php echo $_GET['error']; ?>
			</div>
	<?php 
	}
	 ?>
	 </div>
</div>