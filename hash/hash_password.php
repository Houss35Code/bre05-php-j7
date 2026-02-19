<?php
if (isset($_POST['password_to_hash'])) {
    $password = $_POST['password_to_hash'];
    
    // On utilise l'algorithme par défaut (bcrypt) comme indiqué dans le cours
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    
    echo "Mot de passe d'origine : " . $password . "<br>";
    echo "Voici votre hash à copier : <strong>" . $hash . "</strong>";
}
?>