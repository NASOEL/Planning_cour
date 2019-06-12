<?php
session_start();
include('config/database.php');

$req= $db ->prepare('SELECT * FROM users where statut= :statut');
$req -> execute([
    'statut' => 2
]);

$users = $req->fetchAll(PDO::FETCH_OBJ);

// code de suppression professeur
$Delete = $db -> prepare("DELETE FROM users WHERE id_users = :id_users");
$Delete->bindParam('id_users', $_GET['id_users']);
$Delete->execute();
// code modification
require('views/professeur.view.php');
