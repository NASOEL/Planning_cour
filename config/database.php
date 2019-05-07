<?php
try {
     $db=new PDO('mysql:host=localhost;dbname=bd_groupe_estel','root','');
} catch(Exeption $e){
    die('erreur :'.$e->getmessage());   
}
?>