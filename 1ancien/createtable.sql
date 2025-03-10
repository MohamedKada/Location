/* PSQL */
CREATE TABLE utilisateur (
    user_id SERIAL PRIMARY KEY,  
    identifiant VARCHAR(100) UNIQUE NOT NULL,
    mail VARCHAR(100) UNIQUE NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    genre VARCHAR(6) CHECK (genre IN ('Homme', 'Femme')),  
    adresse VARCHAR(255),
    ville VARCHAR(100),
    CP INT,
    is_admin INT CHECK (is_admin IN (0, 1)) DEFAULT 0,  
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* MYSQL */

CREATE TABLE utilisateur (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    identifiant varchar(100) UNIQUE NOT NULL,
    mail varchar(100) UNIQUE NOT NULL,
    mdp varchar(255) NOT NULL,
    nom varchar(50) NOT NULL,
    prenom varchar(50) NOT NULL,
    genre ENUM('Homme', 'Femme'),
    adresse varchar(255),
    ville varchar(100),
    CP INT,
    is_admin TINYINT(1) DEFAULT 0, -- 0 = utilisateur, 1 = admin
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

INSERT INTO utilisateur (identifiant, mail, mdp, nom, prenom, genre, adresse, ville, cp, is_admin)
VALUES ('admin', 'admin@tplocation.com', '$2a$12$LktMRKIPwpsLv0LZHMQFKOLMcBhWNVtiQMjzpkFwI1MRZOQ4ZVtJu', 'reiner', 'brown',
NULL, NULL, NULL, NULL, 1);

INSERT INTO utilisateur (identifiant, mail, mdp, nom, prenom, genre, adresse, ville, cp, is_admin)
VALUES 
    ('aoc', 'aoc123@gmail.com', '$2a$12$0qm.Mwr0Rt0mqwILlVSGse5.HxEjsApcKMCY7fdW7IRnIJ2GWbg4i', 'Hoover', 'Bertholt', 'Homme', '9 rue des roses', 'Paris', 75019, 0),
    ('KLIM9', 'cristaline@gmail.com', '$2a$12$KwodN9n5H4Zw5Oywr8.c3eaOInCk/B/oZ4oYZeh2dW9NWYF0P2fIC', 'Leonhart', 'Annie', 'Femme', '12 rue la Madonne', 'Aulnay-Sous-Bois', 93600, 0);
