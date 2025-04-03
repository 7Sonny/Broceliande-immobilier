<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brocéliande Immo - Accueil</title>
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
              <li class="nav-item">
                <a class="nav-link" href="rdv.php">Prendre rendez-vous</a>
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

<!-- texte intro -->
<section class="hero">
  <div class="container text-center">
    <h1>Bienvenue chez Brocéliande Immo</h1>
    <p><b>Mettre votre bien en ligne</b></p>
    <a href="inscription.php" class="btn btn-primary">Voir plus</a>
  </div>
</section>
<!-- texte intro -->

<!-- En vedette -->
<section class="featured-properties">
  <div class="container">
    <h2 class="text-center mb-5">Nos biens en vedette</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="Images/maisoncampagne.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maison de campagne</h5>
            <p class="card-text">Magnifique maison en pleine nature</p>
            <a href="annonce1.php" class="btn btn-primary">Voir plus</a> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="Images/appartementville.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Appartement</h5>
            <p class="card-text">Appartement en plein centre ville</p>
            <a href="annonce2.php" class="btn btn-primary">Voir plus</a> 
    </div>
  </div>
</section>
<!-- En vedette -->

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