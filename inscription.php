<?php
session_start();
?>
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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Inscription</h2>
                            
                            <?php if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <?php 
                                        foreach($_SESSION['errors'] as $error) {
                                            echo "<li>" . htmlspecialchars($error) . "</li>";
                                        }
                                        unset($_SESSION['errors']);
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <?php if(isset($_SESSION['success_message'])): ?>
                                <div class="alert alert-success">
                                    <?php 
                                    echo htmlspecialchars($_SESSION['success_message']);
                                    unset($_SESSION['success_message']);
                                    ?>
                                </div>
                            <?php endif; ?>

                            <form action="traitement_inscription.php" method="POST" class="registration-form">
                                <div class="form-group">
                                    <label for="email">Adresse email</label>
                                    <input type="email" 
                                           class="form-control" 
                                           id="email" 
                                           name="email" 
                                           value="<?php echo isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''; ?>"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" 
                                           class="form-control" 
                                           id="password" 
                                           name="password" 
                                           required>
                                    <small class="form-text text-muted">Le mot de passe doit contenir au moins 8 caractères</small>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirm">Confirmer le mot de passe</label>
                                    <input type="password" 
                                           class="form-control" 
                                           id="password_confirm" 
                                           name="password_confirm" 
                                           required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                            </form>
                            
                            <div class="mt-3 text-center">
                                <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    var password = document.getElementById('password').value;
    var confirm = document.getElementById('password_confirm').value;
    
    if (password !== confirm) {
        e.preventDefault();
        alert('Les mots de passe ne correspondent pas !');
    }
});
</script>
</body>
</html>
<?php
// Nettoyage des données de session après utilisation
unset($_SESSION['form_data']);
?>