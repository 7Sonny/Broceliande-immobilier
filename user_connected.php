<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Utilisateur - Brocéliande Immo</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Identification -->
    <div class="container">
        <h1 class="mt-5">Bienvenue, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Vous êtes connecté en tant qu'utilisateur.</p>
    <!-- Identification -->

        <!-- Formulaire de contact -->
        <div class="mt-5">
            <h2>Contactez un agent</h2>
            <form action="traitement_contact.php" method="POST">
                <div class="form-group">
                    <label for="nom">Votre nom:</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre adresse e-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Votre message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <!-- Formulaire de contact -->

        <!-- Message de bienvenue-->
        <div class="mt-5">
            <div class="alert alert-success" role="alert">
                <p>Bienvenue, <?php echo $_SESSION['username']; ?>!</p>
                <p>Vous pouvez désormais contacter un agent Brocéliande en utilisant le formulaire ci-dessus.</p>
            </div>
        </div>
        <!-- Message de bienvenue-->

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>