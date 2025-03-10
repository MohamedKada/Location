<?php

require_once 'config.php';
function role() {
    if (!isset($_SESSION['user'])) {
        return 'guest'; 
    }

    $role = $_SESSION['user'];
    
    if ($role == 'admin') {
        return 'admin';
    } elseif ($role == 'user') {
        return 'user';
    } else {
        return 'guest';
    }
}

function connexion($identifiant, $mdp){
    global $pdo;
    $query = $pdo -> prepare("SELECT user_id, mdp, is_admin FROM utilisateur WHERE identifiant = :identifiant");
    $query->execute(['identifiant' => $identifiant]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['mdp'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user'] = ($user['is_admin'] == 1) ? 'admin' : 'user';

        return true;
    }
    else {
        return false;
    }
}

function inscription($identifiant, $mdp, $mail){
    global $pdo;
    $verif = $pdo->prepare("SELECT user_id FROM utilisateur WHERE identifiant = :identifiant OR mail = :mail");
    $verif->execute(['identifiant' => $identifiant, 'mail' => $mail]);

    if ($verif->fetch()){
        return "Cet identifiant ou cet email est déja utilisé.";
    }

    $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

    $query = $pdo->prepare("INSERT INTO utilisateur (identifiant, mdp, mail, is_admin) VALUES (:identifiant, :mdp, :mail, 0)");
    $query->execute(['identifiant' => $identifiant, 'mdp' => $mdp_hash, 'mail' => $mail]);
    return true;
}

function disconnect(){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
