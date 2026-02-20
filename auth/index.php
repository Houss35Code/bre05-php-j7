<?php
// 1. Démarrer la session en tout premier
session_start();

// 2. Inclure la connexion à la base de données
require 'connexion.php';

// 3. Récupérer la route (le paramètre GET)
// Si $_GET['route'] existe, on le stocke, sinon on met NULL
$route = isset($_GET['route']) ? $_GET['route'] : null;

// 4. Charger le layout qui contient la structure HTML
require 'layout.phtml';
?>