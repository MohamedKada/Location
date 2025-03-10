<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
if(isset($_POST['inscription'])){
    $identifiant = htmlentities($_POST['identifiant'], ENT_QUOTES, "UTF-8");
    $mdp = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
    $mail = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    if ($_POST['password'] !== $_POST['confirm_password']){
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        $result = inscription($identifiant, $mdp, $mail);
        if ($result === true) {
            $success = "Votre compte a été crée avec succès. Vous pouvez maintenant vous connecter.";
        } else {
            $error = $result;
        }
    }
}

$role = role();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TpLoc - M'inscrire</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'pages/header.php'; ?>
    <main>
        <div class="signup-container">
            <div class="signup-card">
                <div class="signup-header">
                    <h1><i class="fas fa-user-plus"></i> Inscription</h1>
                    <p>Créez votre compte pour accéder à nos services</p>
                </div>
                
                <?php if (!empty($error)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($success)): ?>
                    <div class="success-message">
                        <i class="fas fa-check-circle"></i> <?php echo $success; ?>
                    </div>
                <?php endif; ?>
                
                <form method="post" action="signin.php" class="signup-form">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i> Identifiant</label>
                        <input type="text" id="username" name="identifiant" placeholder="Choisissez un identifiant" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                        <small>8 caractères minimum</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm_password"><i class="fas fa-lock"></i> Confirmation du mot de passe</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" name="inscription" class="btn-signup">
                            <i class="fas fa-user-plus"></i> Créer mon compte
                        </button>
                    </div>
                </form>
                
                <div class="signup-footer">
                    <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous</a></p>
                </div>
            </div>
        </div>
    </main>
    <?php include 'pages/footer.php'; ?>
</body>
</html>