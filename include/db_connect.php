<?php
include "include/connect.php";
$conn = mysqli_connect ( HOST,MARIADB_USER,MARIADB_PASSWORD, MARIADB_DATABASE);
if (mysqli_connect_errno()) {
    echo 'Désolé, connexion au serveur ' . HOST . ' impossible, '. mysqli_connect_error(), "\n";
    
}
else {
mysqli_set_charset($conn,"utf8") ;
}