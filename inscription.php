<?php
session_start();
include('config/database.php');
require('views/inscription.view.php');
include('filters/auth_filter.php');

if (isset($_POST['validation'])) {
    if(!empty(['prenom','nom','email','statut','telephone'])) {
        extract($_POST);
        $hash = password_hash('estel', PASSWORD_BCRYPT);


        $rep =  $db ->prepare('SELECT id_users from users');
        $rep->execute();
        $ids = $rep->fetchAll(PDO::FETCH_OBJ);

        foreach ($ids as $id) {
            # code...
            $num = $id->id_users;
        }

        if ($statut == 1) {
            $matricule = 'PATS00'.($num+1);
        } elseif ($statut == 2) {
            $matricule = 'PER00'.($num+1);
        }
        
        $req = $db -> prepare('INSERT INTO users(prenom, nom, matricule, email, statut,  telephone,password) VALUES(:prenom, :nom, :matricule, :email, :statut, :telephone,:password)');
        $req->execute([
            'prenom' => $prenom,
            'nom' => $nom,
            'matricule' => $matricule,
            'email'     => $email,
            'statut'    => $statut,
            'telephone' => $telephone,
            'password'  => $hash
        ]);

        // var_dump($prenom, $nom,$email,$statut,$telephone,$hash);
        // die();
        header('location:inscription.php');
    }
}