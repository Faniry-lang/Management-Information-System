DROP DATABASE IF EXISTS management;

CREATE DATABASE management;

USE management;

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE permissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50),
    description TEXT
);

CREATE TABLE role_permission (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT, 
    permission_id INT,
    FOREIGN KEY(role_id) REFERENCES roles(id),
    FOREIGN KEY(permission_id) REFERENCES permissions(id)
);

CREATE TABLE departements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) UNIQUE,
    mot_de_passe TEXT,
    departement_id INT,
    role_id INT,
    FOREIGN KEY(departement_id) REFERENCES departements(id),
    FOREIGN KEY(role_id) REFERENCES roles(id)
);

CREATE TABLE exercice (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL
);

CREATE TABLE periode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    exercice_id INT NOT NULL,
    FOREIGN KEY (exercice_id) REFERENCES exercice(id)
);

CREATE TABLE categorie_client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    description TEXT
);

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    email VARCHAR(50),
    categorie_client_id INT,
    FOREIGN KEY(categorie_client_id) REFERENCES categorie_client(id)
);

CREATE TABLE categorie_produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100)
);

CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prix_unitaire DOUBLE NOT NULL,
    categorie_produit_id INT,
    FOREIGN KEY (categorie_produit_id) REFERENCES categorie_produit(id)
);


CREATE TABLE categorie_charge (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100)
);

CREATE TABLE charges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prix_unitaire DOUBLE NOT NULL,
    categorie_charge_id INT,
    FOREIGN KEY (categorie_charge_id) REFERENCES categorie_charge(id)
);

CREATE TABLE type_recette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE type_depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE recettes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    type_recette_id INT NOT NULL,
    produit_id INT NOT NULL,
    departement_id INT NOT NULL,

    FOREIGN KEY(type_recette_id) REFERENCES type_recette(id),
    FOREIGN KEY(produit_id) REFERENCES produits(id),
    FOREIGN KEY(departement_id) REFERENCES departements(id)
);

CREATE TABLE previsions_recette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recette_id INT,
    quantite INT,
    montant DOUBLE,
    periode_id INT NOT NULL,
    FOREIGN KEY(recette_id) REFERENCES recettes(id),
    FOREIGN KEY(periode_id) REFERENCES periode(id)
);

CREATE TABLE realisations_recette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recette_id INT,
    quantite INT,
    montant DOUBLE,
    date_realisation DATE,
    FOREIGN KEY(recette_id) REFERENCES recettes(id)
);

CREATE TABLE depenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    type_depense_id INT NOT NULL,
    charge_id INT NOT NULL,
    departement_id INT NOT NULL,

    FOREIGN KEY(type_depense_id) REFERENCES type_depense(id),
    FOREIGN KEY(charge_id) REFERENCES charges(id),
    FOREIGN KEY(departement_id) REFERENCES departements(id)
);

CREATE TABLE previsions_depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    depense_id INT,
    quantite INT,
    montant DOUBLE,
    periode_id INT NOT NULL,
    FOREIGN KEY(depense_id) REFERENCES depenses(id),
    FOREIGN KEY(periode_id) REFERENCES periode(id)
);

CREATE TABLE realisations_depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    depense_id INT,
    quantite INT,
    montant DOUBLE,
    date_realisation DATE,
    FOREIGN KEY (depense_id) REFERENCES depenses(id)
);

CREATE TABLE vente_produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produit_id INT,
    quantite INT,
    montant_total DOUBLE,
    client_id INT,
    date_vente DATE NOT NULL,
    FOREIGN KEY(produit_id) REFERENCES produits(id),
    FOREIGN KEY(client_id) REFERENCES clients(id)
);

CREATE TABLE actions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT
);

CREATE TABLE type_reaction (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE reactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_reaction_id INT,
    description TEXT,
    FOREIGN KEY(type_reaction_id) REFERENCES type_reaction(id)
);

CREATE TABLE reaction_produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reaction_id INT,
    produit_id INT,
    cout DOUBLE,
    pourcentage_effet DOUBLE, 
    date_debut DATE,
    date_fin DATE,
    FOREIGN KEY(produit_id) REFERENCES produits(id),
    FOREIGN KEY(reaction_id) REFERENCES reactions(id)
);

CREATE TABLE estimations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produit_id INT NOT NULL,
    montant_estime DOUBLE NOT NULL,
    date_estimation DATE NOT NULL,
    type_estimation ENUM('avant_CRM', 'apres_CRM') NOT NULL, 
    periode_id INT NOT NULL,
    FOREIGN KEY(produit_id) REFERENCES produits(id),
    FOREIGN KEY(periode_id) REFERENCES periode(id)
);
