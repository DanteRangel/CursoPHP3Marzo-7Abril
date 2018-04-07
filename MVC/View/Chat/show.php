
<div class="row">
	<?php foreach ($tickets as $key => $ticket): ?>
		<div class="col-md-12">
			<?php if ($_SESSION['user']['id']==$ticket['id_recibe']): ?>
				<div class="col-md-6 alert alert-warning">
				  <strong><?php echo $user->find($ticket['id_envia'])['nombre']; ?></strong> <?php echo $ticket['mensaje']; ?>

				</div>
				<?php $id_otro= $user->find($ticket['id_envia'])['id'];?>
			<?php endif ?>
		
		
		<?php if ($_SESSION['user']['id']==$ticket['id_envia']): ?>
				<div class=" col-md-6 alert alert-success" style="text-align:right;float: right;">
				  <?php echo $ticket['mensaje']; ?>
				  <strong><?php echo $user->find($ticket['id_envia'])['nombre']; ?></strong> 

				</div>

			
			<?php endif ?>
		</div>	
			
				<?php $titulo= $ticket['titulo'];?>

	<?php endforeach ?>

</div>
<div class="row">
	<form action="./?controller=Chat&method=send&ticket=<?php echo $_GET['ticket'] ?>" method="POST">
		<div class="col-md-12">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Envia mensaje nuevo" name="mensaje">
				
				<span class="input-group-btn">
				<input class="btn btn-success" type="submit"><i class="fa fa-envelope"></i></input>
				</span>
			</div><!-- /input-group -->
		</div>
		<input type="hidden" name="id_recibe" value="<?php echo $id_otro; ?>">
		<input type="hidden" name="id_envia" value="<?php echo $_SESSION['user']['id']; ?>">
		<input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
	</form>
</div>