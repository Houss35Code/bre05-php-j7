<?php

if (isset($_POST['theme_color'])) {
    $couleurChoisie = $_POST['theme_color'];
    
    setcookie("user_theme", $couleurChoisie);
    
    $_COOKIE["user_theme"] = $couleurChoisie;
}

$fichierCSS = "default.css"; 
if (isset($_COOKIE["user_theme"])) {
    if ($_COOKIE["user_theme"] === "red") {
        $fichierCSS = "red.css";
    } elseif ($_COOKIE["user_theme"] === "blue") {
        $fichierCSS = "blue.css";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercice cookie</title>
    <link rel="stylesheet" href="<?= $fichierCSS ?>" />
</head>
<body>
    <h1>Sed sint laboriosam et blanditiis architecto cum aspernatur placeat.</h1>
    <p>Le thème actuel stocké dans le cookie est : 
       <strong><?= isset($_COOKIE["user_theme"]) ? $_COOKIE["user_theme"] : "Aucun (Noir par défaut)" ?></strong>
    </p>

    <p>Lorem ipsum dolor sit amet. Nam error beatae sed vitae ipsa et libero officiis ut minus eaque hic porro quidem eum dolor aliquam?</p>
    
    <hr>
    <a href="select_cookie.html">Retour au formulaire</a>
</body>
</html>