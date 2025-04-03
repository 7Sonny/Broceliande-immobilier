<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brocéliande Immo - Annonces</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

<!-- Choix du bien -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Voir les biens en location</h5>
                        <p class="card-text">Découvrez nos annonces de biens disponibles à la location.</p>
                        <a href="location.php" class="btn btn-primary">Voir les biens en location</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Voir les biens en vente</h5>
                        <p class="card-text">Consultez nos annonces de biens disponibles à la vente.</p>
                        <a href="vente.php" class="btn btn-primary">Voir les biens en vente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Choix du bien -->

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