<?php 
session_start();

// Paramètres pour la base de données Render (PostgreSQL)
$render_dsn = 'pgsql:host=dpg-cv7469jqf0us73au5l90-a.oregon-postgres.render.com;port=5432;dbname=portfolio_database_erzl';
$render_username = 'portfolio_database_erzl_user';
$render_password = '1cHydVkJQS5aH1bOGM2neQOyfQlt0WDZ';

// Paramètres pour la base de données locale (MySQL)
$local_dsn = 'mysql:dbname=tplocation;host=localhost';
$local_username = 'root';
$local_password = '';

try {
    // Essayer de se connecter à Render (PostgreSQL)
    $pdo = new PDO($render_dsn, $render_username, $render_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données Render !";
} catch (PDOException $e) {
    // Si la connexion à Render échoue, se connecter à la base de données locale
    try {
        $pdo = new PDO($local_dsn, $local_username, $local_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion à la base de données locale réussie !";
    } catch (PDOException $e) {
        // Si la connexion à la base locale échoue, afficher une erreur
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>
