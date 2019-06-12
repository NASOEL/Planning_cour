<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GROUPE ESTEL </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">choisisez matiere et la classe!</h1>
                        </div>
                        <!-- pour matiere et filiere -->
                           <form class="user" action="mat-fil.php" method="post" >
                            <div class="form-group">
                                <label for="statut">Matiére:</label>
                                <select name="matiere" id="" class="form-control">
                                    <?php foreach ($matieres as $matiere): ?>
                                <option value="<?= $matiere->id_matiere ?>"><?php echo($matiere->lib_matiere); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <hr>
                            <div class="form-group">
                                <label for="statut">classe:</label>
                                <select name="filiere" id="" class="form-control">
                                    <?php foreach ($filieres as $filiere): ?>
                                    <option selected>filiere</option>
                                        <option value="<?= $filiere->id_filiere ?>"><?php echo($filiere->code_filiere); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <input type="submit" name="ajouter" class="btn btn-primary btn-user btn-block" value="continuer" href="ajouter-seance.php">
                            <hr>

                        </form>
                        <div class="text-center">
                            <a class="small" href="accueil-admin.php">retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- connexion -->

</body>
</html>
