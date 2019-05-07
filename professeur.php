<?php
session_start();
include('config/database.php');

$req= $db ->prepare('SELECT * FROM users where statut= :statut');
$req -> execute([
    'statut' => 2
]);

$users = $req->fetchAll(PDO::FETCH_OBJ);


function delete($id) {
    global $db;
    $req1= $db ->prepare('DELETE FROM users WHERE id_users = :id_users');
    $req1 -> execute([
        'id_users' => $id
    ]);
}
require('views/professeur.view.php');