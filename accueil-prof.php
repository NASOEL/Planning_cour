<?php
session_start();
include('config/database.php');
$rep =  $db ->prepare('SELECT * from matiere WHERE id_users = :id_users');
$rep->execute(['id_users' => $_SESSION['user_id']]);
$matieres = $rep->fetchAll(PDO::FETCH_OBJ);

require('views/accueil-prof.view.php');