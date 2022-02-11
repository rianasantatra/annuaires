<!DOCTYPE html>
<html>

<head>
	<title>Annuaire Paositra Malagasy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="<?php echo site_url(); ?>img/phonebook.png">&nbsp;Annuaires</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a class="btn btn-primary" href="<?php echo site_url(); ?>add-annuaire"><i class="bi bi-plus"></i> Ajouter</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h2>Update Annuaire</h2>
		<form role="form" method="post" action="<?php echo site_url() ?>edit-annuaire-post" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $annuaire[0]->id ?>" name="annuaire_id">
			<div class="form-group">
				<label for="nom">Nom:</label> <input type="text" value="<?php echo $annuaire[0]->nom ?>" class="form-control" id="nom" name="nom">
			</div>
			<div class="form-group">
				<label for="fonction">Fonction:</label> <input type="text" value="<?php echo $annuaire[0]->fonction ?>" class="form-control" id="fonction" name="fonction">
			</div>
			<div class="form-group">
				<label for="num">Num:</label> <input type="number" value="<?php echo $annuaire[0]->num ?>" class="form-control" id="num" name="num">
			</div>
			<hr>
			<button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Valider </button>
			<a class="btn btn-danger" href="<?php echo site_url('manage'); ?>"><i class="bi bi-back"></i> Retour</a>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>