<?php
if (!empty($_SESSION["id"]))
	$link = "Se Deconnecter";
	$nav = site_url('users/logout');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Annuaire Paositra Malagasy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span><img src="<?php echo site_url(); ?>img/phonebook.png"></span>&nbsp;Annuaires</a>
				<a class="btn btn-primary" href="<?php echo site_url('add-annuaire'); ?>"><i class="bi bi-plus"></i> Ajouter</a>	
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo $nav; ?>"><?php echo $link; ?></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="alert alert-success">
				<strong> <span class="glyphicon glyphicon-ok"></span>
					<?php echo $this->session->flashdata('success'); ?>
				</strong>
			</div>
		<?php } ?>

		<?php if (!empty($annuaire)) { ?>
			<table class="table table-responsive table-hover" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Fonctions</th>
						<th>Noms</th>
						<th>Flotte</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($annuaire as $annuaires) {
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $annuaires->fonction; ?></td>
							<td><?php echo $annuaires->nom; ?></td>
							<td><?php echo $annuaires->num; ?></td>
							<td>
								<a class=" btn btn-warning" href="<?php echo site_url(); ?>edit-annuaire/<?php echo $annuaires->id; ?>"><i class="bi bi-pencil"></i></a>
								<a data-confirm='Supprimer ?' class=" btn btn-danger" href="<?php echo site_url(); ?>delete-annuaire/<?php echo $annuaires->id; ?>" onclick=" return confirm('Suppimer?')"><i class=" bi bi-trash"></i></a>
							</td>

						</tr>
					<?php

						$i++;
					}
					?>
				</tbody>
			</table>
		<?php } else { ?>
			<div class="alert alert-info" role="alert">
				<strong>No Annuaires Found!</strong>
			</div>
		<?php } ?>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable({
				paging: true,
				"order": [
					[0, 'asc']
				],
				"columns": [
					null,
					null,
					null,
					null,
					{
						"width": "10%"
					}
				]
			});
		});
	</script>
</body>

</html>