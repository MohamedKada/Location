<?php session_start(); 
if(isset($_SESSION['user_id'])){$id = $_SESSION['user id'];} else {$id = 0;}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
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
    <div class="form-container">
        <div class="form-header">
            <button>Connexion</button>
            <a href = "inscription.php"><button>Inscription</button></a>
        </div>
        <h2>Connexion</h2>
        <form>
            <input type="email" placeholder="Adresse mail" required>
            <input type="password" placeholder="Mot de passe" required>
            <button type="submit">Me connecter</button>
        </form>
    </div>
</body>
</html>
