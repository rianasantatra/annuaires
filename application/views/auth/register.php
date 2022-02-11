<!DOCTYPE html>
<html lang="en">

<head>
    <title>Annuaire Paositra Malagasy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
</head>

<body style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form class="form-group" role="form" method="post" action="<?php echo site_url('users/register_post'); ?>">
                            <h2 class="text-center mb-5">Nouveau Utilisateur</h2>

                            <div class="input-group mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Nom" name="fname" />
                                <span class="text-danger"><?php echo form_error('fname'); ?></span>
                            </div>

                            <div class="input-group mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Prénom" name="lname" />
                                <span class="text-danger"><?php echo form_error('lname'); ?></span>
                            </div>
                            <div class="input-group mb-4">
                                <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>

                            <div class="input-group mb-4">
                                <input type="password" class="form-control form-control-lg" placeholder="Mot de Passe" name="password" />
                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                            </div>

                            <button class="btn btn-primary btn-lg" type="submit">Ajouter</button>
                            <hr>
                            <?php echo $this->session->flashdata('msg'); ?>
                        </form>
                        <a class="btn btn-light btn-lg fw-bold text-body" href="<?php echo site_url('annuaires/index'); ?>"><span><i class="bi bi-arrow-left-circle"></i></span> Retour</a>
						<a class="btn btn-light btn-lg fw-bold text-body" href="<?php echo site_url('users/login'); ?>">Se Connecter <span><i class="bi bi-arrow-right-circle"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>