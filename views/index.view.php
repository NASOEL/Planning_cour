
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connexion</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">

</head>
<body class="">
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div>
                <div class="text-center" >
                  <h1 class="h1 text-gray-900 mb-4 welcom"color="blue">Bienvenue !</h1>
                </div>
            <!-- logo estel -->
                <div>
                    <img src="assets/img/ESTEL.png" alt=""  width="25%" height="10%">
                </div>
        </div>
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                            <div class="col-lg-3"></div>
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg-6">
                            <div class="p-5">
                                 <form class="user" action="index.php" method="post">
                                    <div class="form-group">
                                        <input type="login" name="matricule" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Matricule ou Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="Se connecter" name="connecter" class="btn btn-primary btn-user btn-block">
                                </form>
                            </div>
                        </div>
                        <?php if (isset($error['login'])) {?>
                            <div class="col-lg-6 mb-4">
                                <div class="p-5">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            <?php echo $error['login'];?>
                                            <div class="text-white-50 small">Veuillez réessayez s'il vous plait ...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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

</body>

</html>
