<?php
session_start();
include('config/database.php');
require('views/ajouter-filiere-view.php');

if (isset($_POST['ajouter'])) {
    if(!empty(['code_filiere','niveau','groupe'])) {
        extract($_POST);
        $req = $db -> prepare('INSERT INTO filiere(code_filiere,niveau,groupe) VALUES(:code_filiere,:niveau,:groupe)');
        $req->execute([
            'code_filiere' => $code_filiere,
           'niveau'    => $niveau,
           'groupe'    => $groupe,
        ]);
    // var_dump( $code_filiere,$niveau,$groupe);
    //     die();

        // header('location:ajouter-filiere.php');
    }
}