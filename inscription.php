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
// envoi mail

$error='';
if($req->execute())
{
$to = $_POST['email'];
$prenom =$_POST['prenom'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <aissatou.n@codeur.online>';
    mail($to, $headers,$prenom);

// success
                  if($error == '') 
                   {
                        $error = '<label class="text-default" style="">'.
                        "Inscription reussi <br>
                        veuillez vous connecter avec votre matricule ". $matricule."estel2019";
                        '</label>';
                          echo $error;
                    }
                    else{
                         $error = '<label class="text-default" style="">'.
                        "Erreur <br>
                        veuillez verifiez vos donne ";
                        '</label>';
                        echo $error;

                    }
                    $prenom='';
                    $matricule='';
                    $nom='';
                    $email='';
                    $statut='';
                    $telephone='';
                    $hash='';   
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<script src="assets/js/vericate_form.js"></script>

</body>
</html>