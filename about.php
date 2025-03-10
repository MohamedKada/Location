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
    <title>TpLoc - A propos</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'pages/header.php'; ?>
    <main>
        <div class="about-container">
            <div class="about-header">
                <h1><i class="fas fa-info-circle"></i> À propos de SioLoc</h1>
                <div class="header-underline"></div>
            </div>
            
            <section class="about-section">
                <h2><i class="fas fa-graduation-cap"></i> Projet scolaire BTS SIO SLAM</h2>
                <p>
                    SioLoc est un projet développé dans le cadre du BTS Services Informatiques aux Organisations (SIO), 
                    option Solutions Logicielles et Applications Métiers (SLAM). Ce site web de location de véhicules 
                    a été conçu comme un exercice pratique pour mettre en application les connaissances acquises pendant la formation.
                </p>
            </section>
            
            <section class="about-section">
                <h2><i class="fas fa-code"></i> Technologies utilisées</h2>
                <div class="tech-grid">
                    <div class="tech-card">
                        <i class="fab fa-html5"></i>
                        <h3>HTML5</h3>
                        <p>Structure et organisation du contenu web</p>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-css3-alt"></i>
                        <h3>CSS3</h3>
                        <p>Mise en forme et design responsive</p>
                    </div>
                    <div class="tech-card">
                        <i class="fab fa-php"></i>
                        <h3>PHP</h3>
                        <p>Programmation back-end et logique métier</p>
                    </div>
                    <div class="tech-card">
                        <i class="fas fa-database"></i>
                        <h3>MySQL</h3>
                        <p>Gestion et stockage des données</p>
                    </div>
                </div>
            </section>
            
            <section class="about-section">
                <h2><i class="fas fa-tasks"></i> Objectifs du projet</h2>
                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Créer une interface utilisateur intuitive et responsive</li>
                    <li><i class="fas fa-check-circle"></i> Développer un système d'authentification sécurisé</li>
                    <li><i class="fas fa-check-circle"></i> Implémenter une gestion de base de données efficace</li>
                    <li><i class="fas fa-check-circle"></i> Intégrer un système de réservation de véhicules</li>
                    <li><i class="fas fa-check-circle"></i> Mettre en place un espace administrateur pour la gestion du parc automobile</li>
                </ul>
            </section>
            
            <section class="about-section">
                <h2><i class="fas fa-car"></i> À propos de SioLoc</h2>
                <p>
                    SioLoc est un service fictif de location de véhicules qui propose une large gamme de modèles 
                    pour tous vos besoins de déplacement. Notre plateforme permet de consulter les véhicules disponibles, 
                    de comparer les différentes options et de réserver facilement le véhicule de votre choix.
                </p>
                <p>
                    Les utilisateurs peuvent créer un compte, parcourir notre catalogue, réserver un véhicule et 
                    gérer leurs réservations. Les administrateurs peuvent quant à eux gérer les utilisateurs, 
                    les véhicules disponibles et les réservations.
                </p>
            </section>
            
            <section class="about-section">
                <h2><i class="fas fa-lightbulb"></i> Compétences développées</h2>
                <div class="skills-container">
                    <div class="skill">
                        <span>Développement Front-end</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Développement Back-end</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Gestion de Base de Données</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Design Responsive</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Sécurité Web</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="note-section">
                <div class="note-box">
                    <i class="fas fa-sticky-note"></i>
                    <p>
                        <strong>Note:</strong> Ce site est un projet scolaire et ne propose pas de véritables services 
                        de location. Les fonctionnalités sont implémentées à des fins éducatives uniquement.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php include 'pages/footer.php'; ?>
</body>
</html>