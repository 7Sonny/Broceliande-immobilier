<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $to = "ivian@broceliande.com";
        $subject = "";
        $body = "Nom de l'utilisateur: $nom\n";
        $body .= "Adresse e-mail de l'utilisateur: $email\n";
        $body .= "Message:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: index.php");
            exit();
        } else {

    header("Location: user_connected.php");
    exit();
}
    }
}

