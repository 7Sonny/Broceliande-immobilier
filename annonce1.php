<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce1 - Brocéliande Immo</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand mr-auto logo-container" href="index.php">
            <img class="logo" src="Images/logo.png" alt="logo1">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="annonces.php">Nos annnonces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vendre.php">Mettre son bien en vente</a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos agences</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="agencerennes.php">Rennes</a>
                        <a class="dropdown-item" href="agencequimper.php">Quimper</a>
                        <a class="dropdown-item" href="agencevannes.php">Vannes</a>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="inscription.php">S'inscire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connexion.php">Connexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- Navbar -->

<!-- Description annonces -->
<section class="apartment-details">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div id="propertyCarousel" class="carousel slide property-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#propertyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#propertyCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/exterieurannonce1.jpeg" class="d-block w-100" alt="Extérieur maison">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/exterieurannonce2.jpeg" class="d-block w-100" alt="Vue jardin">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#propertyCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#propertyCarousel" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-info">
                    <h1 class="property-title">Maison de campagne</h1>
                    <div class="property-price">1 500 000 €</div>
                    <div class="property-features">
                        <div class="feature">
                            <i class="fas fa-bed"></i>
                            <span>7 chambres</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-bath"></i>
                            <span>4 salles de bain</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-ruler-combined"></i>
                            <span>500 m²</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Quimper</span>
                        </div>
                    </div>
                    <div class="property-description">
                        <h2>Description</h2>
                        <p>Bienvenue dans ce havre de paix niché au cœur de la légendaire forêt de Quimper. Cette maison de campagne, baignée de lumière, offre une retraite idyllique pour les amoureux de la nature et les rêveurs.</p>
                    </div>
                    <div class="property-contact">
                        <a href="contact.php" class="btn btn-primary btn-lg btn-block">Contacter l'agent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Description annonces -->

<!-- Footer -->
<footer class="footer bg-dark text-light text-center py-4">
  <p>&copy; 2024 Brocéliande Immo. Tous droits réservés.</p>
</footer>
<!-- Footer -->

<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>