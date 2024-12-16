<?php session_start(); 
if(isset($_SESSION['user_id'])){$id = $_SESSION['user id'];} else {$id = 0;}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="inscription.css">
    <?php
        function generatePassword() {
            $car = range('a', 'z');
            $maj = range('A', 'Z');
            $chi = range('0', '9');
            $spe = str_split("!@#$%^&*()-=+;:<>?/~");
            $all = array_merge($car, $maj, $chi, $spe);
            $password = "";
            $password .= $car[array_rand($car)];
            $password .= $maj[array_rand($maj)];
            $password .= $chi[array_rand($chi)];
            $password .= $spe[array_rand($spe)];
            while (strlen($password) < 12) {
                $password .= $all[array_rand($all)];
            }
            return str_shuffle($password);
            }
            $generatedPassword = generatePassword();?>
    <script>
        function showPassword() {
            const generatedPassword = "<?php echo $generatedPassword; ?>";
            alert("Votre mot de passe : " + generatedPassword);
            }
    </script>
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
        <a href = "connexion.php"><button class = "active">Connexion</button></a>
        <button>Inscription</button></a>
        </div>
        <h2>Créer un compte</h2>
        <form>
            <input type="email" placeholder="Adresse mail" required>
            <input type="password" placeholder="Mot de passe" required>
            <button type="button" onclick="showPassword()">Générer un mot de passe</button>
            <button type="submit">M'inscrire</button>
        </form>
    </div>
</body>
</html>
