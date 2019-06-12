<?php
include('../config/database.php');

$stmt= $db -> prepare("SELECT * FROM users where id_users=:id_users");
$stmt->bindParam('id_users',$_GET['id_users']);
$stmt->execute();
$rsrequete=$stmt->fetchObject();
?>

<!doctype html>
<html>
<head>
<title>modifier</title>
</head>
<body>
    <form methode="GET" action="../confirmation.php">
    <div class="form-group">
      <input type="hidden" class="form-control" name="id_users" id="" value="<?php echo $_GET['id_users'];?>" placeholder="id_users">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="prenom" id="" value="<?php echo($rsrequete->prenom);?>" placeholder="prenom">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="nom" id="" placeholder="nom" value="<?php echo($rsrequete->nom);?>" placeholder="nom">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="email" id="" placeholder="email" value="<?php echo($rsrequete->email);?>" placeholder="email">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="telephone" id="" placeholder="telephone" value="<?php echo($rsrequete->telephone);?>">
    </div>
        <input type="submit" class="btn btn-primary btn-user btn-block" name="confirm" >
    </form>
</body>
</html>

