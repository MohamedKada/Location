<?php session_start(); 
if(isset($_SESSION['user_id'])){$id = $_SESSION['user id'];} else {$id = 0;}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo" width="50"> <!-- Remplacez par l'URL de votre logo -->
        </div>
        <ul class="nav-links">
            <li><a href="main.php">Accueil</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <?php if($id == 1): ?> <!-- Si l'utilisateur est admin -->
                <li><a href="admin.php">Panneau Admin</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
            <?php elseif($id == 2): ?> <!-- Si l'utilisateur est connecté -->
                <li><a href="profil.php">Profil</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
            <?php else: ?> <!-- Si l'utilisateur n'est pas connecté -->
                <li><a href="connexion.php">Se connecter</a></li>
                <li><a href="inscription.php">S'inscrire</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <!-- Contenu principal -->
    <div class="content">
        <h2>Bienvenue sur notre site !</h2>
        <p>Découvrez notre catalogue et bien plus encore.</p>
    </div>
</body>
</html>
