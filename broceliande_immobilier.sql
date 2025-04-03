-- Création de la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS broceliande_immobilier CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE broceliande_immobilier;

-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_inscription DATETIME NOT NULL,
    role ENUM('utilisateur', 'admin') DEFAULT 'utilisateur',
    UNIQUE KEY unique_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des annonces
CREATE TABLE IF NOT EXISTS annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    prix DECIMAL(10, 2) NOT NULL,
    type ENUM('vente', 'location') NOT NULL,
    surface DECIMAL(8, 2),
    chambres INT,
    ville VARCHAR(100),
    code_postal VARCHAR(5),
    adresse TEXT,
    date_creation DATETIME NOT NULL,
    id_utilisateur INT,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des images d'annonces
CREATE TABLE IF NOT EXISTS images_annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_annonce INT NOT NULL,
    chemin_image VARCHAR(255) NOT NULL,
    ordre INT DEFAULT 0,
    FOREIGN KEY (id_annonce) REFERENCES annonces(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_expediteur INT,
    id_destinataire INT,
    id_annonce INT,
    sujet VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_envoi DATETIME NOT NULL,
    lu BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id_expediteur) REFERENCES utilisateurs(id) ON DELETE SET NULL,
    FOREIGN KEY (id_destinataire) REFERENCES utilisateurs(id) ON DELETE SET NULL,
    FOREIGN KEY (id_annonce) REFERENCES annonces(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;