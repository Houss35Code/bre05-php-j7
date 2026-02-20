<?php
session_start(); // On démarre pour accéder à la session

// On détruit la session pour effacer l'entrée $_SESSION['user']
session_destroy();

// Redirection vers la home du mini-projet
header('Location: ../index.php?route=home');
exit();
?>