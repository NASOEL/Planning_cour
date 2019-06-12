  <?php
  include('config/database.php');


//include('professeur.php'); 
// modification 
$req='UPDATE `users` SET `prenom`=:prenom, `nom`=:nom, `email`=:email, `telephone`=:telephone WHERE `users`.`id_users`=:id_users';
$prepare= $db -> prepare($req);
$prepare->bindParam('id_users',intval($_GET['id_users']));
$prepare->bindParam('prenom',$_GET['prenom']);
$prepare->bindParam('nom',$_GET['nom']);
$prepare->bindParam('email',$_GET['email']);
$prepare->bindParam('telephone',$_GET['telephone']);
$prepare->execute();
//var_dump($_GET['prenom']);die;
header("location:professeur.php");
//require('./views/professeur.php');
