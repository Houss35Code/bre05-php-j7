<?php
require '../connexion.php'; // On remonte d'un dossier pour trouver connexion.php

if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'])) {
    // Hachage du mot de passe selon ton cours
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Préparation de l'insertion en base de données
    $query = $pdo->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (?, ?, ?, ?)');
    $query->execute([
        $_POST['email'],
        $hashedPassword,
        $_POST['first_name'],
        $_POST['last_name']
    ]);

    // Redirection vers l'accueil
    header('Location: ../index.php?route=home');
    exit();
}