<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location - Brocéliande Immo</title>
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

<!-- Annonce Location -->
<div class="container mt-4">
    <h1 class="text-center mb-4">Annonces de Locations Immobilières</h1>
    <div class="row">
        <!-- Annonce 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/annonce3.jpg" class="card-img-top" alt="Property 1">
                <div class="card-body">
                    <h5 class="card-title">Appartement Moderne</h5>
                    <p class="card-text">Appartement moderne situé au coeur de Nice.</p>
                    <a href="annonce3.php" class="btn btn-primary">Voir Détails</a>
                </div>
            </div>
        </div>
        <!-- Annonce 4 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/annonce4.jpg" class="card-img-top" alt="Property 2">
                <div class="card-body">
                    <h5 class="card-title">Maison Spacieuse</h5>
                    <p class="card-text">Maison spacieuse avec grand jardin, idéale pour famille.</p>
                    <a href="annonce4.php" class="btn btn-primary">Voir Détails</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Annonce Location -->

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