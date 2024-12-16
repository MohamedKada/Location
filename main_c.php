<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // Si l'utilisateur est connecté, on peut faire des opérations spécifiques
    // Par exemple, charger les informations de l'utilisateur, etc.
} else {
    header('Location: connexion.php');
    exit();
}

// Vous pouvez aussi ajouter des contrôles de logique, comme des filtres sur les pages
