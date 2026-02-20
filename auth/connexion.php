<?php
// Configuration des paramètres de connexion
$host = 'localhost';
$db   = 'houssounihalifa_php_j7'; // Mettez le nom exact choisi en étape 1
$user = 'root';             // Par défaut sur XAMPP
$pass = '';                 // Par défaut sur XAMPP (vide)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
     // Création de la connexion PDO
     $pdo = new PDO($dsn, $user, $pass);
     // Configuration pour afficher les erreurs SQL si elles surviennent
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     // Si la connexion échoue, on affiche l'erreur
     die("Erreur de connexion : " . $e->getMessage());
}
?>