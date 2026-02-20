<?php
session_start(); // On démarre la session pour stocker l'utilisateur
require '../connexion.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // On cherche l'utilisateur par son email
    $query = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $query->execute([$email]);
    $user = $query->fetch();

    if ($user === false) {
        echo "<h1>Email incorrect</h1>"; //
    } else {
        // On compare le mot de passe saisi avec le hash de la base
        if (password_verify($password, $user['password'])) {
            // Succès : on stocke le prénom et nom en session
            $_SESSION['user'] = $user['first_name'] . ' ' . $user['last_name'];
            
            // Redirection vers la home
            header('Location: ../index.php?route=home');
            exit();
        } else {
            echo "<h1>Mot de passe incorrect</h1>"; //
        }
    }
}
?>