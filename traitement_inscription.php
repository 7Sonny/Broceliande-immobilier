<?php
session_start();
require_once 'config.php';

// Fonction pour nettoyer les données
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $email = cleanInput($_POST['email']);
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    // Validation
    $errors = [];
    
    // Validation email
    if (empty($email)) {
        $errors[] = "L'email est requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format d'email invalide";
    }
    
    // Validation mot de passe
    if (empty($password)) {
        $errors[] = "Le mot de passe est requis";
    } elseif (strlen($password) < 8) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères";
    }
    
    // Vérification de la correspondance des mots de passe
    if ($password !== $password_confirm) {
        $errors[] = "Les mots de passe ne correspondent pas";
    }
    
    // Si pas d'erreurs, on vérifie si l'email existe déjà
    if (empty($errors)) {
        try {
            $pdo = getPDO();
            
            // Vérification si l'email existe déjà
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateurs WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetchColumn() > 0) {
                $errors[] = "Cet email est déjà utilisé";
            } else {
                // Insertion du nouvel utilisateur
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO utilisateurs (email, mot_de_passe, date_inscription) VALUES (?, ?, NOW())");
                
                if ($stmt->execute([$email, $hashed_password])) {
                    $_SESSION['success_message'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                    header("Location: connexion.php");
                    exit();
                } else {
                    $errors[] = "Erreur lors de l'inscription";
                }
            }
        } catch (PDOException $e) {
            error_log("Erreur SQL : " . $e->getMessage());
            $errors[] = "Une erreur technique est survenue. Veuillez réessayer plus tard.";
        }
    }
    
    // S'il y a des erreurs
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = ['email' => $email];
        header("Location: inscription.php");
        exit();
    }
} else {
    // Si quelqu'un essaie d'accéder directement au fichier
    header("Location: inscription.php");
    exit();
}
?>
