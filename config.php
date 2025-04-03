<?php
// Paramètres de connexion à la base de données
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Votre mot de passe MySQL si vous en avez défini un
define('DB_NAME', 'broceliande_immobilier');
define('DB_CHARSET', 'utf8mb4');

try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Fonction pour obtenir la connexion PDO
function getPDO() {
    global $pdo;
    return $pdo;
}
?>