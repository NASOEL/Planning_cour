
<!DOCTYPE html>
<html lang="en">

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

<body class="bg-gradient">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Creer un compte!</h1>
                        </div>
                        <form class="user" action="inscription.php" method="post" >
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="prenom" class="form-control form-control-user" id="Prenon" placeholder="Prenon">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="nom" class="form-control form-control-user" id="Nom" placeholder="Nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="statut">votre statut:</label>
                                <select name="statut" id="" class="form-control">
                                    <option>Statut</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Professeur</option>
                                </select>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="tel" minlength="9" maxlength="9" name="telephone" class="form-control form-control-user" id="telephone" placeholder="telephone">
                                </div>
                            </div>
                            <input type="submit" name="validation" class="btn btn-primary btn-user btn-block" value="s'inscrire">
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="accueil-admin.php">Retour à l'accueil</a>
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


