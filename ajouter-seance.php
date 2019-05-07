<?php
session_start();
include('config/database.php');

$rep =  $db ->prepare('SELECT id_matiere, lib_matiere from matiere');
$rep->execute();
$matieres = $rep->fetchAll(PDO::FETCH_OBJ);

require('views/ajouter-seance.view.php');

if (isset($_POST['ajouter'])) {
    if(!empty(['matiere','numseance','duree','objectif','ressource','video','internet','transport','activite'])) {
        extract($_POST);


        $req = $db -> prepare('insert into seance(num_seance,dure_seance,objectif_pedagogique,video_projection,acces_internet,transport,ressource_pedagogique,activite,id_matiere)
        VALUES (:num_seance,:dure_seance,:objectif_pedagogique,:video_projection,:acces_internet,:transport,:ressource_pedagogique,:activite,:id_matiere)');
        $req->execute([
            'num_seance' => $numseance,
            'dure_seance' => $duree,
            'objectif_pedagogique' => $objectif,
            'video_projection' => $video,
            'acces_internet' => $internet,
            'transport' => $transport,
            'ressource_pedagogique' => $ressource,
            'activite' => $activite,
            'id_matiere' => $matiere
        ]);

        var_dump($numseance, $duree, $objectif, $video,$internet, $transport,$ressource,$activite,$matiere);
        die();

        header('location: liste-seance.php');
    }
}