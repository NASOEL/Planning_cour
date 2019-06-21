<?php
include('includes/_header.php');
include('includes/_menu.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin </title>

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
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ajouter nouvelle filiere !</h1>
                        </div>
                        <form class="user" action="ajouter-filiere.php" method="post" >
                           
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="code_filiere" class="form-control" placeholder="code_filiere">
                                </div>
                                <div class="form-group">
                                    <select name="niveau" id="" class="form-control">
                                        <option>Niveau</option>
                                        <option value="1">licence1</option>
                                        <option value="2">licence2</option>
                                        <option value="3">licence3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="groupe" id="" class="form-control">
                                        <option>Groupe</option>
                                        <option value="1">debutant</option>
                                        <option value="2">intermediare</option>
                                        <option value="2">avancee</option>
                                    </select>
                                </div>
                                    <input type="submit" name="ajouter" class="btn btn-primary btn-user btn-block" value="ajouter">
                                    <hr>
                            </div>
                            <div class="text-center">
                                <a class="small" href="accueil-admin.php" >retour</a>
                            </div>
                        </form>
                        <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
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
