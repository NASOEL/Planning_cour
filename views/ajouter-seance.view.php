<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Groupe estel </title>

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
                            <h1 class="h4 text-gray-900 mb-4">Ajouter séance!</h1>
                        </div>
                        <form class="user" action="ajouter-seance.php" method="post" >
                            <div class="form-group">
                                <label for="statut">votre Matiére:</label>
                                <select name="matiere" id="" class="form-control">
                                    <?php foreach ($matieres as $matiere): ?>
                                        <option value="<?= $matiere->id_matiere ?>"><?php echo($matiere->lib_matiere); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="statut">Filiere:</label>
                                <select name="filiere" id="" class="form-control">
                                    <?php foreach ($filieres as $filiere): ?>
                                        <option value="<?= $filiere->id_filiere ?>"><?php echo($filiere->code_filiere); ?><?php echo($filiere->niveau); ?><?php echo($filiere->groupe); ?></option>
                                    <?php endforeach; ?>
                                </select>
                             </div>
                            
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="numseance" class="form-control" placeholder="Numéro Séance">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="duree" class="form-control" placeholder="Durée Séance">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="objectif" class="form-control" placeholder="Objectif Pédagogique">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="ressource" class="form-control" placeholder="Ressource Pédagogique">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Video projection</label>&nbsp;&nbsp;
                                    <label for="Oui" class="col-form-label">Oui</label>
                                    <input type="radio" id="oui" name="video" class="custom-radio" value="oui">
                                    &nbsp;&nbsp;
                                    <label for="Non" class="col-form-label">Non</label>
                                    <input type="radio" id="Non" name="video" class="custom-radio" value="non">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Access Internet</label>&nbsp;&nbsp;
                                    <label for="Oui" class="col-form-label">Oui</label>
                                    <input type="radio" id="oui" name="internet" class="custom-radio" value="oui">
                                    &nbsp;&nbsp;
                                    <label for="Non" class="col-form-label">Non</label>
                                    <input type="radio" id="Non" name="internet" class="custom-radio" value="non">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Transport</label>&nbsp;&nbsp;
                                    <label for="Oui" class="col-form-label">Oui</label>
                                    <input type="radio" id="oui" name="transport" class="custom-radio" value="oui">
                                    &nbsp;&nbsp;
                                    <label for="Non" class="col-form-label">Non</label>
                                    <input type="radio" id="Non" name="transport" class="custom-radio" value="non">
                                </div>
                                <!-- debut -->
                                    <label>activite :</label>
                                    <div id="activite" class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="activite" placeholder="activite"/>
                                     <input id="addInput" type="button" value="Ajouter un activite"/>
                                    <input type="submit" value="Valider" />
                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function()
                                {
                                    $('#addInput').click(function()
                                    {
                                        var c = $("#activite input:last").clone();
                            
                                        var name = $(c).attr('name');
                                        value = name.split('-');
                                        name = value[0]+'-'+(parseInt(value[1])+1);

                                        $(c).attr('name', name);
                                        $("#mots-clefs").append(c);
                                    });
                                });
                            </script>
                     <!-- fin -->
                            <input type="submit" name="ajouter" class="btn btn-primary btn-user btn-block" value="ajouter">
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="accueil-prof.php">retour</a>
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
