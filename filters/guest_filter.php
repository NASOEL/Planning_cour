

<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['user_matricule'])){
    header('location: accueil-admin.php');
    exit();
}

?>