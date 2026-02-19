<?php
session_start(); // Doit démarrer la session pour pouvoir la manipuler

// Détruit la session pour effacer les variables
session_destroy();

// Rediriger vers l'accueil
header('Location: index.php');
exit();
?>