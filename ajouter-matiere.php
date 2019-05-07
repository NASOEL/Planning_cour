<?php
session_start();
include('config/database.php');



$rep =  $db ->prepare('SELECT id_users,prenom,nom from users WHERE statut=2 ');
$rep->execute();
$user = $rep->fetchAll(PDO::FETCH_OBJ);

    require('views/ajouter-matiere-view.php');

    if (isset($_POST['ajouter'])) {
        if(!empty(['horaire','lib_matiere,users'])) {
            extract($_POST);
            $req = $db -> prepare('INSERT INTO matiere(horaire,lib_matiere,id_users) VALUES(:horaire,:lib_matiere,:users)');
            $req->execute([
            'horaire'           => $horaire,
            'lib_matiere'       => $lib_matiere,
            'users'    =>$users
            ]);
        var_dump($horaire,$lib_matiere,$users);
            die();

            // header('location:ajouter-filiere.php');
        }
    }