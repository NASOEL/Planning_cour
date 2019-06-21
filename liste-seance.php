<?php
// session_start();
// include('config/database.php');

// //
// // code diey
//   $rep =  $db ->prepare('SELECT * from matiere WHERE id_users = :id_users');
// $rep->execute(['id_users' => $_SESSION['user_id']]);
// $matieres = $rep->fetchAll(PDO::FETCH_OBJ);



// if (isset($_POST['submit']))
//    {
//       $matiere = $_POST['matiere'];
//       $rep =  $db ->prepare('SELECT * from seance left join matiere on seance.id_matiere=matiere.id_matiere and matiere.id_users=:id_users where matiere.id_matiere=:id_matiere');
//       $rep->execute([
//                       'id_matiere' => $matiere,
//                       'id_users' => $_SESSION['user_id']
//                     ]);
// $seances = $rep->fetchAll(PDO::FETCH_OBJ);
// //var_dump($seances);die();
// $rep =  $db ->prepare('SELECT * from mat_fil LEFT JOIN filiere on filiere.id_filiere=mat_fil.id_filiere WHERE id_matiere = :id_matiere');
// $rep->execute(['id_matiere' => $_POST['matiere']]);
// $seances = $rep->fetchAll(PDO::FETCH_OBJ);
// }


// require('views/liste-seance.view.php');








session_start();
include('config/database.php');

$rep =  $db ->prepare('SELECT * from matiere WHERE id_users = :id_users');
$rep->execute(['id_users' => $_SESSION['user_id']]);
$matieres = $rep->fetchAll(PDO::FETCH_OBJ);

extract($_POST);

if (isset($submit)) {
    $rep =  $db ->prepare('SELECT * from mat_fil WHERE id_matiere = :id_matiere');
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
// supprimer seance
$Delete = $db -> prepare("DELETE FROM seance WHERE id_seance = :id_seance");
$Delete->bindParam('id_seance', $_GET['id_seance']);
$Delete->execute();

require('views/liste-seance.view.php');