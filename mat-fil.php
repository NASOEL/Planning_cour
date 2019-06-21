<?php
session_start();
include('config/database.php');
// matiere
$rep =  $db ->prepare('SELECT id_matiere, lib_matiere FROM matiere');
$rep->execute();
$matieres = $rep->fetchAll(PDO::FETCH_OBJ);
// filiere
$req =  $db ->prepare('SELECT id_filiere, code_filiere,niveau,groupe FROM filiere');
$req->execute();
$filieres = $req->fetchAll(PDO::FETCH_OBJ);
require('views/matiere-filiere.php');
// insertion dans mat_fil
if (isset($_POST['ajouter'])) {
    if(!empty(['matiere','filiere'])) {
        extract($_POST);
        // $req1 = $db -> prepare('INSERT into mat_fil LEFT JOIN filiere on filiere.id_filiere=mat_fil.id_filiere 
        // LEFT JOIN matiere on filiere.id_matiere=mat_fil.id_matiere
        // (id_filiere,id_matiere)
        // VALUES (:id_filiere,id_matiere)');
        $req1 = $db ->prepare('INSERT into mat_fil(id_filiere,id_matiere)VALUE(:id_filiere,:id_matiere)');
        $req1->execute([
        'id_filiere'=>$filiere,
        'id_matiere'=>$matiere,
        ]);
            var_dump($matiere,$filiere);
      }
}
//  header ('location:ajouter-seance.php');
//  exit();