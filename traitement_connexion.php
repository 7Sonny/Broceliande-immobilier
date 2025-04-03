<?php
session_start();

if(isset($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);

    if(check_user_credentials($mail, $password)) {
        $_SESSION['connected'] = true;
        $_SESSION['mail'] = $mail;
        header("Location: user_connected.php");
        exit();
    } else {
        $error_message = "Adresse e-mail ou mot de passe incorrect.";
    }
}

function check_user_credentials($mail, $password) {
    $pdo = get_PDO();
    $query = "SELECT * FROM users WHERE mail = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$mail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['pass'])) {
        return true;
    } else {
        return false;
    }
}

function get_PDO() {
    $host = 'localhost';
    $db   = 'brocelianimmo';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
