<?php
session_start();
include('config/database.php');

$req= $db ->prepare('SELECT * FROM users where statut= :statut');
$req -> execute([
    'statut' => 2
]);

require('views/accueil-admin.view.php');