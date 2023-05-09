/*
Creation BDD PSQL sur le serveur
*/
/* en PSQL */ 
CREATE DATABASE ecf_php_acj;

CREATE TABLE roles(
    id_rol SERIAL,
    libelle_rol VARCHAR(20) NOT NULL,
    PRIMARY KEY(id_rol)
);

CREATE TABLE categories(
   id_cat SERIAL,
   nom_cat VARCHAR(50) NOT NULL,
   libelle_cat VARCHAR(250) NOT NULL,
   code_cat DECIMAL(5,0) NOT NULL,
   valeur_point_cat DECIMAL(5,0),
   PRIMARY KEY(id_cat)
);

CREATE TABLE villes(
    id_vil SERIAL,
    nom_vil VARCHAR(100) NOT NULL,
    PRIMARY KEY(id_vil)
);

CREATE TABLE code_postal(
    id_code_postal SERIAL,
    code_postal DECIMAL(5,0) NOT NULL,
    PRIMARY KEY(id_code_postal)
);

CREATE TABLE adresses(
    id_adr SERIAL,
    num_rue_adr DECIMAL(4,0) NOT NULL,
    nom_rue_adr VARCHAR(250) NOT NULL,
    id_code_postal INT NOT NULL,
    id_vil INT NOT NULL,
    PRIMARY KEY(id_adr),
    FOREIGN KEY(id_code_postal) REFERENCES code_postal(id_code_postal),
    FOREIGN KEY(id_vil) REFERENCES villes(id_vil)
);

CREATE TABLE utilisateurs(
   id_uti SERIAL,
   nom_uti VARCHAR(20) NOT NULL,
   prenom_uti VARCHAR(20) NOT NULL,
   datenaissance_uti DATE NOT NULL,
   email_uti VARCHAR(50) NOT NULL,
   password_uti VARCHAR(255) NOT NULL,
   point_cumuler_uti INT,
   id_adr INT NOT NULL,
   id_rol INT NOT NULL, 
   PRIMARY KEY(id_uti),
   FOREIGN KEY(id_adr) REFERENCES adresses(id_adr),
   FOREIGN KEY(id_rol) REFERENCES roles(id_rol)
);

CREATE TABLE objets(
    id_obj SERIAL,
    nom_obj VARCHAR(50) NOT NULL,
    image_obj VARCHAR(250),
    description_obj TEXT NOT NULL,
    disponibilite_obj boolean NOT NULL,
    id_cat INT NOT NULL,
    id_uti INT NOT NULL,
    PRIMARY KEY(id_obj),
    FOREIGN KEY(id_cat) REFERENCES categories(id_cat),
    FOREIGN KEY(id_uti) REFERENCES utilisateurs(id_uti)
);

CREATE TABLE clients(
    id_cli SERIAL,
    id_uti INT NOT NULL,
    id_obj INT NOT NULL,
    PRIMARY KEY(id_cli),
    FOREIGN KEY(id_uti) REFERENCES utilisateurs(id_uti),
    FOREIGN KEY(id_obj) REFERENCES objets(id_obj)
);

CREATE TABLE emprunts(
    id_emps SERIAL,
    date_debut_emps DATE NOT NULL,
    date_fin_emps DATE NOT NULL,
    rendu BOOLEAN NOT NULL,
    id_cli INT NOT NULL,
    id_obj INT NOT NULL,
    PRIMARY KEY(id_emps),
    FOREIGN KEY(id_cli) REFERENCES clients(id_cli),
    FOREIGN KEY(id_obj) REFERENCES objets(id_obj)
);