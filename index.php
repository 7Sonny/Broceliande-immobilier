<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brocéliande Immo - Agence Immobilière en Bretagne</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="Images/logo.png" alt="Brocéliande Immo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="annonces.php">Nos biens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vendre.php">Vendre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rdv.php">Rendez-vous</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Nos agences
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agencerennes.php">Rennes</a></li>
                            <li><a class="dropdown-item" href="agencequimper.php">Quimper</a></li>
                            <li><a class="dropdown-item" href="agencevannes.php">Vannes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Trouvez votre bien idéal en Bretagne</h1>
                <p>Découvrez notre sélection exclusive de propriétés dans les plus belles régions de Bretagne</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="annonces.php" class="btn btn-primary">Découvrir nos biens</a>
                    <a href="rdv.php" class="btn btn-outline-light">Prendre rendez-vous</a>
                </div>
            </div>
        </section>

        <!-- Featured Properties -->
        <section class="featured-properties">
            <div class="container">
                <div class="section-title">
                    <h2>Nos biens coup de cœur</h2>
                    <p>Découvrez notre sélection de propriétés exceptionnelles</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-card">
                            <div class="property-img">
                                <img src="Images/maisoncampagne.jpeg" alt="Maison de campagne">
                            </div>
                            <div class="property-content">
                                <h3 class="property-title">Maison de caractère</h3>
                                <div class="property-price">450 000 €</div>
                                <p>Magnifique maison de campagne avec vue imprenable sur la nature bretonne.</p>
                                <div class="property-details">
                                    <div class="property-detail">
                                        <i class="fas fa-bed"></i>
                                        <span>4 chambres</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>180 m²</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Rennes</span>
                                    </div>
                                </div>
                                <a href="annonce1.php" class="btn btn-primary w-100 mt-3">Voir le bien</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-card">
                            <div class="property-img">
                                <img src="Images/appartementville.jpeg" alt="Appartement en ville">
                            </div>
                            <div class="property-content">
                                <h3 class="property-title">Appartement moderne</h3>
                                <div class="property-price">280 000 €</div>
                                <p>Superbe appartement rénové en plein cœur de ville avec terrasse.</p>
                                <div class="property-details">
                                    <div class="property-detail">
                                        <i class="fas fa-bed"></i>
                                        <span>2 chambres</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>75 m²</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Vannes</span>
                                    </div>
                                </div>
                                <a href="annonce2.php" class="btn btn-primary w-100 mt-3">Voir le bien</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-card">
                            <div class="property-img">
                                <img src="Images/maisonbord.jpeg" alt="Maison en bord de mer">
                            </div>
                            <div class="property-content">
                                <h3 class="property-title">Villa bord de mer</h3>
                                <div class="property-price">620 000 €</div>
                                <p>Exceptionnelle villa avec accès direct à la plage et vue mer.</p>
                                <div class="property-details">
                                    <div class="property-detail">
                                        <i class="fas fa-bed"></i>
                                        <span>5 chambres</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>200 m²</span>
                                    </div>
                                    <div class="property-detail">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Quimper</span>
                                    </div>
                                </div>
                                <a href="annonce3.php" class="btn btn-primary w-100 mt-3">Voir le bien</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>Brocéliande Immo, votre partenaire de confiance pour tous vos projets immobiliers en Bretagne depuis 2010.</p>
                </div>
                <div class="footer-section">
                    <h3>Nos agences</h3>
                    <ul class="footer-links">
                        <li><a href="agencerennes.php">Rennes</a></li>
                        <li><a href="agencequimper.php">Quimper</a></li>
                        <li><a href="agencevannes.php">Vannes</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="vente.php">Acheter</a></li>
                        <li><a href="vendre.php">Vendre</a></li>
                        <li><a href="location.php">Louer</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-phone"></i> 02 99 XX XX XX</li>
                        <li><i class="fas fa-envelope"></i> contact@broceliande-immo.fr</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Brocéliande Immo. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>