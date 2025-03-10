<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
if (isset($_POST['connexion'])){
    $identifiant = htmlentities($_POST['identifiant'], ENT_QUOTES, "UTF-8");
    $mdp = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
    if (connexion($identifiant,$mdp)){
        header("Location: index.php");
        exit();
    }
    else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
$role = role();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TpLoc - Connexion</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'pages/header.php'; ?>
    
    <main>
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h1><i class="fas fa-user-circle"></i> Connexion</h1>
                    <p>Accédez à votre espace personnel</p>
                </div>
                
                <?php if (!empty($error)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
                <form method="post" action="login.php" class="login-form">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i> Identifiant</label>
                        <input type="text" id="username" name="identifiant" placeholder="Votre identifiant" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" name="connexion" class="btn-login">
                            <i class="fas fa-sign-in-alt"></i> Se connecter
                        </button>
                    </div>
                </form>
                <?php if (!empty($error)) : ?>
                    <p style="color:red;"><?= $error; ?></p>
                <?php endif; ?>
                
                <div class="login-footer">
                    <p>Vous n'avez pas de compte ? <a href="signin.php">Inscrivez-vous</a></p>
                </div>
            </div>
        </div>
    </main>
    <?php include 'pages/footer.php'; ?>
</body>
</html>