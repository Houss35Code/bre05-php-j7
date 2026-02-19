<?php
session_start(); // Démarre la session avant tout
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice Sessions</title>
</head>
<body>
    <form action="nickname.php" method="POST">
        <label for="nickname">Choisissez un pseudo :</label>
        <input type="text" name="nickname" id="nickname" required>
        <button type="submit">Valider</button>
    </form>
    <br>
    <a href="logout.php">Déconnexion</a> </body>
</html>