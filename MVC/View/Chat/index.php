<div class="row">
	<table class="table-responsive table">
		<thead> 
			<th>Ticket</th>
			<th>Numero de mensajes</th>
			<th>Acciones</th>
		</thead>
		<tbody>
		<?php foreach ($tickets as $key => $value): ?>
				<tr>
					<td><?php echo $value['ticket']; ?></td>
					<td><?php echo $value['no_mensajes']; ?></td>
					<td><a class="btn btn-info" href="./?controller=Chat&method=show&ticket=<?php echo $value['ticket']; ?>">Ver mas

					</a></td>
				</tr>
			
		<?php endforeach ?>
			
		</tbody>
	</table>
</div>