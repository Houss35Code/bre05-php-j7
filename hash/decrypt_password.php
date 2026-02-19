<?php
if (isset($_POST['pwd_clair']) && isset($_POST['pwd_hash'])) {
    $password = $_POST['pwd_clair'];
    $hash = $_POST['pwd_hash'];

    // J'utilise la fonction de vérification du cours
    $isPasswordCorrect = password_verify($password, $hash);

    if ($isPasswordCorrect === true) {
        echo "Mot de passe correct";
    } else {
        echo "Mot de passe erroné";
    }
}
?>