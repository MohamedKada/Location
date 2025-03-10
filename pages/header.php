<?php 
require_once 'includes/functions.php'; 
$role = role(); 
if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    disconnect();}
?>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php"><i class="fas fa-car"></i> SioLoc</a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <?php if ($role == 'user'): ?>
                    <li><a href="catalog.php">Catalogue</a></li>
                    <li><a href="cart.php">Panier</a></li>
                <?php endif; ?>
                <?php if ($role == 'admin'): ?>
                    <li><a href="usermanage.php">Gestion Utilisateur</a></li>
                    <li><a href="invoicemanage.php">Gestion Facture</a></li>
                <?php endif; ?>
                <li><a href="about.php">A propos</a>
                <?php if ($role != 'guest'): ?>
                    <li><a href="index.php?logout=true" name="logout" class="btn-nav">Me déconnecter</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="btn-nav">Me Connecter</a></li>
                    <li><a href="signin.php" class="btn-nav btn-nav2">M'inscrire</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>