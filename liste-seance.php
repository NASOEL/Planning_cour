<?php
session_start();
include('config/database.php');
 $matiere = $_POST[`matiere`];
   $rep =  $db ->prepare('SELECT * from sceances left join matiere on sceance.id_matiere=matiere.id_matiere and matiere.id_user=$_session[`id_users`] 
    Left join filiere on sceance.id_filiere=filiere.id_filiere where matiere.id_matiere=matiere');
    $rep->execute(['id_matiere' => $matiere]);


// if (isset($submit)) {
//     $rep =  $db ->prepare('SELECT * from seance WHERE id_matiere = :id_matiere');
//     $rep->execute(['id_matiere' => $matiere]);
//      $rep->fetchAll(PDO::FETCH_OBJ);

//      var_dump($matiere);
// }


require('views/liste-seance.view.php');

