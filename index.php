<?php
session_start();
include('config/database.php');
$error = [];


if (isset($_POST['connecter'])) {
    if(!empty(['matricule','password'])) {
        extract($_POST);

        $req= $db ->prepare('SELECT * FROM users where matricule= :matricule');
        $req -> execute([
            'matricule' => $matricule
        ]);

        $user = $req->fetch(PDO::FETCH_OBJ);

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id']=$user->id_users;
            $_SESSION['user_prenom']=$user->prenom;
            $_SESSION['user_nom']=$user->nom;
            $_SESSION['user_matricule']=$user->matricule;
            $_SESSION['user_email']=$user->email;
            $_SESSION['user_statut']=$user->statut;

            if ($user->statut == 1) {
                header('location: accueil-admin.php');
            } elseif ($user->statut == 2) {
                header('location: accueil-prof.php');
            }

        } else {
            $error['login'] = 'Matricule ou Mot de passe invalide !!';
        }
    }
}

require('views/index.view.php');
