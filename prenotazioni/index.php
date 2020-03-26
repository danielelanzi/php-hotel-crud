<?php
include 'server.php';
include_once __DIR__ . '/../env.php';
include __DIR__ . '/../partials/header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Tutte le stanze</h1>
			<table class='table'>
				<thead>
					<tr>
						<th>ID</th>
						<th>Room Id</th>
						<th>Created</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($results) > 0) {
						foreach ($results as $prenotazione) { ?>
							<td><?php echo $prenotazione['id'] ?></td>
							<td><?php echo $prenotazione['stanza_id'] ?></td>
							<td><?php echo $prenotazione['created_at'] ?></td>
							<td><a href="<?php echo $basePath ?>prenotazioni/show/show.php?id=<?php echo $prenotazione['id'] ?>">View</a></td>
							<td></td>
							<td></td>
					<?php   }
					} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include __DIR__ . '/../partials/footer.php';
?>