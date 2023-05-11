/*INSERTION DE QUELQUES JEUX DE DONNEES*/

/* Insertion pour la table categories */

INSERT INTO categories ("nom_cat", "libelle_cat", "code_cat", "valeur_point_cat") 
    VALUES 
    ('Bricolage', 'Perceuse', 'BRI0001PER', 10),
    ('Cuisine', 'Robot Multifonctions', 'CUI0001ROB', 05),
    ('Jardinage', 'Tondeuse essence', 'JAR0001TON', 20),
    ('Informatique', 'Imprimante Multifonctions', 'INF0001IMP', 15),
    ('Téléphonie', 'HuaweiP20', 'TEL0001HUA', 15)
;

/* Insertion pour la table roles */

INSERT INTO roles ("libelle_rol")
    VALUES
    ('Utilisateur'),
    ('Admin')
;


