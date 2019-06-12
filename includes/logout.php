<?php
session_start();
include('config/database.php');
// detruire les variable
session_unset();

// ddetruire les session
session_destroy();
header('location:./views/index.view.php');
    
?>