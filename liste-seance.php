<?php
session_start();
include('config/database.php');

$rep =  $db ->prepare('SELECT * from matiere WHERE id_users = :id_users');
$rep->execute(['id_users' => $_SESSION['user_id']]);
$matieres = $rep->fetchAll(PDO::FETCH_OBJ);

extract($_POST);

if (isset($submit)) {
    $rep =  $db ->prepare('SELECT * from fil_mat WHERE id_matiere = :id_matiere');
    $rep->execute(['id_matiere' => $matiere]);
    $fil_mat = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach ($fil_mat as $filmat) {
        $rep =  $db ->prepare('SELECT * from filiere WHERE id_filiere = :id_filiere');
        $rep->execute(['id_filiere' => $filmat->id_filiere]);
        $filieres = $rep->fetchAll(PDO::FETCH_OBJ);
    }

    $rep =  $db ->prepare('SELECT * from seance WHERE id_matiere = :id_matiere');
    $rep->execute(['id_matiere' => $matiere]);
    $seances = $rep->fetchAll(PDO::FETCH_OBJ);
}


require('views/liste-seance.view.php');

