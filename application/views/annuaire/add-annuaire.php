<!DOCTYPE html>
<html>

<head>
	<title>Annuaire Paositra Malagasy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span><img src="<?php echo site_url(); ?>img/phonebook.png"></span>&nbsp;Annuaires</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="btn btn-primary" href="<?php echo site_url(); ?>manage"> <i class="bi bi-search"></i> Liste </a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">

		<form role="form" method="post" action="<?php echo site_url() ?>add-annuaire-post">
			<div class="form-group">
				<label for="nom">Nom:</label> <input type="text" class="form-control" id="nom" name="nom">
			</div>
			<div class="form-group">
				<label for="fonction">Fonction:</label> <input type="text" class="form-control" id="fonction" name="fonction">
			</div>
			<div class="form-group">
				<label for="num">Num:</label> <input type="number" class="form-control" id="num" name="num">
			</div>
			<hr>
			<button type="submit" class="btn btn-success"> <i class="bi bi-check2"></i> Valider </button>
			<button type="reset" class="btn btn-danger"> <i class="bi bi-x"></i> Annuler </button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>