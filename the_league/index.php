<?php
// 1. Charge l'autoloader de Composer pour Twig
require_once __DIR__ . '/vendor/autoload.php';

// 2. Configuration de Twig (recherche dans le dossier 'templates')
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);

// 3. Préparation du tableau de données avec tes nouveaux noms d'images
$teams = [
    [
        "name" => "Angry Owls", 
        "logo" => "angry-owls.png" // Correspond à image_d3de02.png
    ],
    [
        "name" => "Chatty Parrots", 
        "logo" => "chatty-parrots.png" // Correspond à image_d3de02.png
    ],
    [
        "name" => "Sparrow", 
        "logo" => "sparrow.png" // Correspond à image_d3de02.png
    ],
    [
        "name" => "Vendetta", 
        "logo" => "vendetta.png" // Correspond à image_d3de02.png
    ],
    [
        "name" => "Panthers", 
        "logo" => "panthers.png" // Correspond à image_d3de02.png
    ]
];

// 4. On envoie les données au template Twig
echo $twig->render("teams.html.twig", [
    "pageTitle" => "The League - Les Équipes",
    "teams" => $teams
]);