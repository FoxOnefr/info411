<?php
include ("connect.php");

$conn = mysqli_connect ( SERVEUR_BD,LOGIN_BD,PASS_BD, NOM_BD );
if (mysqli_connect_errno()) {
    echo 'Désolé, connexion au serveur ' . SERVEUR_BD . ' impossible, '. mysqli_connect_error(), "\n";
    
}
else {
mysqli_set_charset($conn,"utf8") ;
}