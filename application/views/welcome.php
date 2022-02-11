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
				<a class="navbar-brand" href="<?php echo site_url(); ?>"><span><img src="<?php echo site_url(); ?>img/phonebook.png"></span>&nbsp;Annuaires</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo site_url('users/index')?>">Se Connecter</a>
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
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>