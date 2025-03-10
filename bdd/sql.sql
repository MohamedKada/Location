DROP TABLE IF EXISTS Uitlisateurs;
DROP TABLE IF EXISTS Factures;
DROP TABLE IF EXISTS Vehicules;

CREATE TABLE Utilisateurs (
    IDU int AUTO_INCREMENT PRIMARY KEY,
    Mail varchar(80),
    MDP varchar(80),
    Nom varchar(80),
    Prenom varchar(80),
    DateN date,
    Statut int
);

CREATE TABLE Vehicules (
    IDV int AUTO_INCREMENT PRIMARY KEY,
    TypeV varchar(80),
    Marque varchar(80),
    Modele varchar(80),
    Annee varchar(80),
    Portes int,
    Km int,
    Conso float,
    PrixJ float,
    PrisS float,
    PrixM float,
    Dispo int
);

CREATE TABLE Factures (
    IDF int AUTO_INCREMENT PRIMARY KEY,
    PrixHT float,
    PrixTTC float,
    DateF date,
    CONSTRAINT FK_Factures_Utilisateurs FOREIGN KEY (IDU) REFERENCES Utilisaeurs(IDU),
    CONSTRAINT FK_Factures_Vehicules FOREIGN KEY (IDV) REFERENCES Vehicules(IDV)
);