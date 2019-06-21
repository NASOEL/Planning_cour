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
                                <label for="statut">Matiére:</label>
                                <select name="matiere" id="" class="form-control">
                                        <option selected>Choisir ici la matiere</option>
                                    <?php foreach ($matieres as $matiere): ?>
                                        <option value="<?= $matiere->id_matiere ?>"><?php echo($matiere->lib_matiere); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="statut">Filiere:</label>
                                <select name="filiere" id="" class="form-control">
                                    <?php foreach ($filieres as $filiere): ?>
                                        <option value="<?= $filiere->id_filiere ?>"><?php echo($filiere->code_filiere); ?><?php echo($filiere->niveau); ?><?php echo($filiere->groupe); ?></option>
                                    <?php endforeach; ?>
                                </select>
                             </div> -->
                            
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
                                <!-- debut  ajout activité avec une petite formulaire-->
                            <form class="activite" action="ajouter-seance.php" method="post" >
                                <div class="form-group row ">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <script type="text/javascript">
                                            function create_champ(i) {
                                            var i2 = i + 1;
                                            document.getElementById('leschamps_'+i).innerHTML = '<input type="text" name="activite['+i+']"></span>';
                                            document.getElementById('leschamps_'+i).innerHTML += (i <= 10) ? '<br /><span id="leschamps_'+i2+'"><a href="javascript:create_champ('+i2+')">Ajouter activite</a></span>' : '';
                                            }
                                        </script>
                                                    <label>activite :</label>
                                        <input type="text" name="activite" /><br />
                                        <span id="leschamps_1"><a href="javascript:create_champ(1)">Ajouter un activité</a></span>
                                        <!-- <input name="valide" type="submit" value="envoyer"/> -->
                                        <button type="submit" value="envoyer" name="envoyer"></button>
                                    </div>
                                </div>
                                 <?php
                                         
                                  if(isset($_POST['envoyer'])){
                                    $activite = " ";
                                    echo "Vos activité : <br>";
                                    foreach($_POST['envoyer'] as $key){
                                        if(!isset($activite)){
                                        $activite = $key;
                                        }
                                        else{
                                        $activite .= " ".$key;
                                        }
                                    }
                                    echo $activite;
                                    $insertactivite = $bdd->prepare('INSERT INTO seance SET activite = ?');
                                    $insertactivite->execute(array($activite));
                                    }  
                                ?>
                                </form>
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
