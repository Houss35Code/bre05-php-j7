<?php
session_start(); // Obligatoire

// Vérifie si la clé existe dans le tableau associatif
if (isset($_SESSION["nickname"])) {
    $pseudo = $_SESSION["nickname"];
    echo "Bienvenue " . $pseudo;
} else {
    echo "Bienvenue invité";
}
?>
<br>
<a href="index.php">Retour à l'accueil</a>