<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$role = role();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SioLoc - Location de véhicules</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'pages/header.php'; ?>
    
    <main>
        <!-- Section Bannière -->
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue sur SioLoc</h1>
                <p>La location de véhicules simple, rapide et économique</p>
                <?php if ($role == 'guest'): ?>
                    <div class="hero-buttons">
                        <a href="signin.php" class="btn btn-primary">Créer un compte</a>
                        <a href="login.php" class="btn btn-secondary">Se connecter</a>
                    </div>
                <?php else: ?>
                    <div class="hero-buttons">
                        <a href="catalog.php" class="btn btn-primary">Voir le catalogue</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Section Avantages -->
        <section class="features-section">
            <div class="container">
                <h2 class="section-title">Pourquoi choisir SioLoc ?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <i class="fas fa-car-side"></i>
                        <h3>Large choix de véhicules</h3>
                        <p>Des citadines aux utilitaires, trouvez le véhicule adapté à tous vos besoins</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-money-bill-wave"></i>
                        <h3>Prix compétitifs</h3>
                        <p>Des tarifs transparents et avantageux pour tous vos déplacements</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Agences partout en France</h3>
                        <p>Récupérez et déposez votre véhicule dans plus de 50 agences</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Comment ça marche -->
        <section class="how-it-works">
            <div class="container">
                <h2 class="section-title">Comment ça marche ?</h2>
                <div class="steps-container">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Créez votre compte</h3>
                            <p>Inscrivez-vous rapidement pour accéder à notre service de location</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Choisissez votre véhicule</h3>
                            <p>Parcourez notre catalogue et sélectionnez le véhicule qui vous convient</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Réservez en ligne</h3>
                            <p>Effectuez votre réservation en quelques clics</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Profitez de votre location</h3>
                            <p>Récupérez votre véhicule et partez en toute liberté</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Véhicules Populaires -->
        <section class="popular-vehicles">
            <div class="container">
                <h2 class="section-title">Nos véhicules les plus demandés</h2>
                <div class="vehicles-grid">
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="public/images/renault-clio.jpg" alt="Renault Clio">
                        </div>
                        <div class="vehicle-info">
                            <h3>Renault Clio</h3>
                            <p class="vehicle-category">Citadine</p>
                            <p class="vehicle-price">À partir de <span>35€</span>/jour</p>
                            <a href="catalog.php" class="btn btn-small">Voir détails</a>
                        </div>
                    </div>
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="public/images/peugeot-3008.jpg" alt="Peugeot 3008">
                        </div>
                        <div class="vehicle-info">
                            <h3>Peugeot 3008</h3>
                            <p class="vehicle-category">SUV</p>
                            <p class="vehicle-price">À partir de <span>65€</span>/jour</p>
                            <a href="catalog.php" class="btn btn-small">Voir détails</a>
                        </div>
                    </div>
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="public/images/renault-kangoo.jpg" alt="Renault Kangoo">
                        </div>
                        <div class="vehicle-info">
                            <h3>Renault Kangoo</h3>
                            <p class="vehicle-category">Utilitaire</p>
                            <p class="vehicle-price">À partir de <span>50€</span>/jour</p>
                            <a href="catalog.php" class="btn btn-small">Voir détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Témoignages -->
        <section class="testimonials">
            <div class="container">
                <h2 class="section-title">Ce que nos clients disent</h2>
                <div class="testimonials-container">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Service impeccable, véhicule propre et en parfait état. Je recommande vivement SioLoc pour tous vos déplacements !"</p>
                        </div>
                        <div class="testimonial-author">
                            <i class="fas fa-user-circle"></i>
                            <div>
                                <h4>Sophie M.</h4>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Réservation rapide et sans souci. Les tarifs sont très compétitifs et le personnel est à l'écoute. Je n'hésiterai pas à revenir !"</p>
                        </div>
                        <div class="testimonial-author">
                            <i class="fas fa-user-circle"></i>
                            <div>
                                <h4>Thomas L.</h4>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Contactez-nous -->
        <section class="contact-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Des questions ? Nous sommes là pour vous aider</h2>
                    <p>Notre équipe est disponible pour répondre à toutes vos questions concernant nos services de location.</p>
                    <a href="#" class="btn btn-primary">Contactez-nous</a>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'pages/footer.php'; ?>
</body>
</html>