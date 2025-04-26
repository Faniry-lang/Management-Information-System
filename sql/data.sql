USE management;

-- Insertion des rôles
INSERT INTO roles (nom) VALUES 
('Administrateur'),
('Gestionnaire'),
('Comptable'),
('Vendeur'),
('Analyste');

-- Insertion des permissions
INSERT INTO permissions (code, description) VALUES 
('CREATE_USER', 'Créer un nouvel utilisateur'),
('EDIT_USER', 'Modifier les informations d''un utilisateur'),
('DELETE_USER', 'Supprimer un utilisateur'),
('VIEW_REPORTS', 'Consulter les rapports'),
('MANAGE_PRODUCTS', 'Gérer les produits'),
('MANAGE_CLIENTS', 'Gérer les clients'),
('MANAGE_FINANCES', 'Gérer les finances'),
('MANAGE_BUDGET', 'Gérer le budget');

-- Attribution des permissions aux rôles
INSERT INTO role_permission (role_id, permission_id) VALUES 
(1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), (1, 8), -- Admin a toutes les permissions
(2, 4), (2, 5), (2, 6), (2, 7), (2, 8), -- Gestionnaire
(3, 4), (3, 7), (3, 8), -- Comptable
(4, 4), (4, 5), (4, 6), -- Vendeur
(5, 4); -- Analyste

-- Insertion des départements
INSERT INTO departements (nom) VALUES 
('Ventes'),
('Marketing'),
('Finances'),
('Ressources Humaines'),
('Production');

-- Insertion des catégories de clients
INSERT INTO categorie_client (nom, description) VALUES 
('Particulier', 'Client individuel'),
('Entreprise', 'Sociétés et organisations'),
('Gouvernement', 'Entités gouvernementales'),
('Association', 'Organisations à but non lucratif'),
('Revendeur', 'Partenaires commerciaux');

-- Insertion des clients
INSERT INTO clients (nom, email, categorie_client_id) VALUES 
('Jean Dupont', 'jean.dupont@email.com', 1),
('Marie Leclerc', 'marie.leclerc@email.com', 1),
('Tech Solutions SA', 'contact@techsolutions.com', 2),
('Ministère de l''Éducation', 'contact@education.gouv.fr', 3),
('Association Horizon', 'info@horizon.org', 4),
('Distri Plus', 'achats@distriplus.com', 5);

-- Insertion des utilisateurs
INSERT INTO utilisateurs (nom, mot_de_passe, departement_id, role_id) VALUES 
('admin', 'hashed_password_1', 3, 1),
('pierre.durand', 'hashed_password_2', 1, 4),
('sophie.martin', 'hashed_password_3', 2, 2),
('thomas.bernard', 'hashed_password_4', 3, 3),
('julie.robert', 'hashed_password_5', 4, 2),
('marc.dubois', 'hashed_password_6', 5, 4),
('celine.petit', 'hashed_password_7', 1, 5);

-- Insertion des exercices financiers
INSERT INTO exercice (date_debut, date_fin) VALUES 
('2024-01-01', '2024-12-31'),
('2025-01-01', '2025-12-31');

-- Insertion des périodes
INSERT INTO periode (date_debut, date_fin, exercice_id) VALUES 
('2024-01-01', '2024-03-31', 1), -- Q1 2024
('2024-04-01', '2024-06-30', 1), -- Q2 2024
('2024-07-01', '2024-09-30', 1), -- Q3 2024
('2024-10-01', '2024-12-31', 1), -- Q4 2024
('2025-01-01', '2025-03-31', 2), -- Q1 2025
('2025-04-01', '2025-06-30', 2); -- Q2 2025

-- Insertion des catégories de produits
INSERT INTO categorie_produit (nom) VALUES 
('Électronique'),
('Mobilier'),
('Vêtements'),
('Services'),
('Alimentaire');

-- Insertion des produits
INSERT INTO produits (nom, prix_unitaire, categorie_produit_id) VALUES 
('Ordinateur portable', 899.99, 1),
('Smartphone', 699.99, 1),
('Bureau ergonomique', 349.50, 2),
('Chaise de bureau', 129.99, 2),
('T-shirt premium', 24.99, 3),
('Consultation IT', 75.00, 4),
('Formation marketing', 450.00, 4),
('Café premium', 12.50, 5);

-- Insertion des catégories de charges
INSERT INTO categorie_charge (nom) VALUES 
('Salaires'),
('Loyer'),
('Équipement'),
('Marketing'),
('Fournisseurs');

-- Insertion des charges
INSERT INTO charges (nom, prix_unitaire, categorie_charge_id) VALUES 
('Salaire vendeur', 2500.00, 1),
('Salaire manager', 4000.00, 1),
('Location bureau', 3500.00, 2),
('Ordinateurs employés', 800.00, 3),
('Publicité en ligne', 1200.00, 4),
('Matières premières', 5000.00, 5);

-- Insertion des types de recettes
INSERT INTO type_recette (nom) VALUES 
('Vente directe'),
('Abonnement'),
('Service'),
('Royalties'),
('Remboursement');

-- Insertion des types de dépenses
INSERT INTO type_depense (nom) VALUES 
('Opérationnel'),
('Investissement'),
('Marketing'),
('Ressources humaines'),
('Taxes');

-- Insertion des recettes
INSERT INTO recettes (description, type_recette_id, produit_id, departement_id) VALUES 
('Vente d''ordinateurs portables', 1, 1, 1),
('Vente de smartphones', 1, 2, 1),
('Service de consultation IT', 3, 6, 1),
('Formations marketing', 3, 7, 2),
('Vente de mobilier de bureau', 1, 3, 1);

-- Insertion des prévisions de recettes
INSERT INTO previsions_recette (recette_id, quantite, montant, periode_id) VALUES 
(1, 50, 44999.50, 1),
(2, 75, 52499.25, 1),
(3, 30, 2250.00, 1),
(1, 60, 53999.40, 2),
(2, 85, 59499.15, 2);

-- Insertion des réalisations de recettes
INSERT INTO realisations_recette (recette_id, quantite, montant, date_realisation) VALUES 
(1, 48, 43199.52, '2024-03-15'),
(2, 80, 55999.20, '2024-03-20'),
(3, 25, 1875.00, '2024-02-10'),
(4, 10, 4500.00, '2024-01-25'),
(1, 22, 19799.78, '2024-04-05');

-- Insertion des dépenses
INSERT INTO depenses (description, type_depense_id, charge_id, departement_id) VALUES 
('Salaires équipe vente', 4, 1, 1),
('Salaires management', 4, 2, 4),
('Location bureaux Paris', 1, 3, 3),
('Achat équipement informatique', 2, 4, 5),
('Campagne Google Ads', 3, 5, 2);

-- Insertion des prévisions de dépenses
INSERT INTO previsions_depense (depense_id, quantite, montant, periode_id) VALUES 
(1, 10, 25000.00, 1),
(2, 5, 20000.00, 1),
(3, 3, 10500.00, 1),
(4, 15, 12000.00, 2),
(5, 1, 1200.00, 2);

-- Insertion des réalisations de dépenses
INSERT INTO realisations_depense (depense_id, quantite, montant, date_realisation) VALUES 
(1, 10, 25000.00, '2024-01-31'),
(2, 5, 20000.00, '2024-01-31'),
(3, 3, 10500.00, '2024-01-05'),
(1, 10, 25000.00, '2024-02-28'),
(2, 5, 20000.00, '2024-02-28');

-- Insertion des ventes de produits
INSERT INTO vente_produit (produit_id, quantite, montant_total, client_id, date_vente) VALUES 
(1, 2, 1799.98, 1, '2024-02-10'),
(2, 1, 699.99, 2, '2024-02-15'),
(3, 10, 3495.00, 3, '2024-03-01'),
(4, 20, 2599.80, 3, '2024-03-01'),
(1, 5, 4499.95, 5, '2024-03-15'),
(7, 2, 900.00, 4, '2024-01-20');

-- Insertion des actions
INSERT INTO actions (description) VALUES 
('Développement nouveau modèle'),
('Campagne de lancement'),
('Expansion distribution'),
('Optimisation prix'),
('Réduction production');

-- Insertion des types de réactions
INSERT INTO type_reaction (nom) VALUES 
('Campagne marketing'),
('Réduction de prix'),
('Programme fidélité'),
('Évolution produit'),
('Changement distribution');

-- Insertion des réactions
INSERT INTO reactions (type_reaction_id, description) VALUES 
(1, 'Campagne réseaux sociaux - Ordinateurs'),
(2, 'Promotion -15% smartphones'),
(3, 'Programme fidélité entreprises'),
(4, 'Mise à jour ergonomique chaises'),
(5, 'Nouveau circuit distribution T-shirts');

-- Insertion des réactions par produit
INSERT INTO reaction_produit (reaction_id, produit_id, cout, pourcentage_effet, date_debut, date_fin) VALUES 
(1, 1, 5000.00, 15.5, '2024-02-15', '2024-03-16'),  -- durée de 30 jours
(2, 2, 3000.00, 12.8, '2024-03-01', '2024-03-31'),  -- durée de 30 jours
(3, 3, 1500.00, 8.2, '2024-01-15', '2024-02-14'),  -- durée de 30 jours
(4, 4, 7500.00, 20.0, '2024-02-10', '2024-03-11'),  -- durée de 30 jours
(5, 5, 2000.00, 5.8, '2024-03-20', '2024-04-19');  -- durée de 30 jours
