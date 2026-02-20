<?php

// 1. On charge l'autoloader de Composer pour accéder à la librairie Dotenv
require_once __DIR__ . '/vendor/autoload.php';

// 2. On indique à PHP où se trouve le fichier .env (ici à la racine du dossier actuel)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); // On charge les variables dans $_ENV

// 3. On récupère les variables du fichier .env pour préparer la connexion
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];

// 4. On crée la connexion PDO comme avant, mais avec les variables d'environnement
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );
    // Configuration des erreurs pour le développement
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Si la connexion échoue (mauvais mot de passe dans le .env par exemple)
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}