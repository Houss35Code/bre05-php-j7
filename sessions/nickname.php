<?php
session_start(); // Obligatoire pour accéder à $_SESSION

if (isset($_POST['nickname'])) {
    // Stocke le pseudo dans la superglobale $_SESSION
    $_SESSION["nickname"] = $_POST['nickname'];
}

// Rediriger vers welcome.php pour voir le résultat
header('Location: welcome.php');
exit();
?>