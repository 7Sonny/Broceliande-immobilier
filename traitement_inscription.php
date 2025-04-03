<?php
session_start();

function get_PDO(): PDO {
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
    } catch (\PDOException  $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function verif_user($email, $password) {
    $pdo = get_PDO();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (mail, pass) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute([$email, $hashed_password])) {
        return true; 
    } else {
        return false; 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (verif_user($email, $password)) {
            header("Location: user_connected.php");
            exit();
        } else {
            header("Location: inscription.php");
            exit();
        }
    }
}
