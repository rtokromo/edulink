<?php
require 'includes/db_connect.php';
require 'includes/auth_functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    
    $user = $gebruikers->findOne(['email' => $email]);
    
    if ($user && password_verify($wachtwoord, $user['wachtwoord'])) {
        startUserSession($user);
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?error=invalid_credentials");
    }
    exit();
}
?>
