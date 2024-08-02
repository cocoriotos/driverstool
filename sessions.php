<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//print session_status();
if (($_SESSION['counter'])==0) {
$usernamer=$_SESSION['usernamer'];
$counter=$_SESSION['counter'];
//print $usernamer;
//print $counter;
//print $_SESSION['counter'];
$usernamer=$_SESSION['usernamer'];
}

//if (session_status() === PHP_SESSION_ACTIVE) {
//    echo "Hay una sesión abierta.";
//} else {
//    echo "No hay una sesión abierta.";
//}
?> 