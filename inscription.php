<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Brocéliande Immo</title>
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

      <!-- Formulaire d'inscription -->
      <div class="main-content">
        <div class="container">
            <form action="traitement_inscription.php" method="POST" class="registration-form">
                <div class="form-group">
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" placeholder="email"required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" placeholder="mots de passe"required>
                </div>
                <button  type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
    <!-- Formulaire d'inscription -->

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Brocéliande Immo. Tous droits réservés.</p>
    </footer>
    <!-- Footer -->

<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>