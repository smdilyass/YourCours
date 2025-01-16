CREATE DATABASE yourCours;
USE yourCours;

CREATE TABLE categorie (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT
)


CREATE TABLE cours (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT ,
contenu VARCHAR (255),
photo VARCHAR (255),
categorie_id INT,
FOREIGN KEY (categorie_id) REFERENCES categorie(id)
);

CREATE TABLE role (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT,
logo VARCHAR (255)
);


CREATE TABLE utilisateur (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(25) ,
prenom VARCHAR(25) ,
email VARCHAR(255) ,
password VARCHAR(255) ,
role_id INT,
FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE tags (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(25) ,
description TEXT,
logo VARCHAR (255)
);

CREATE TABLE cours_tags (
    tags_id INT,
    Foreign Key (tags_id) REFERENCES tags(id),
    cours_id INT,
    Foreign Key (cours_id) REFERENCES cours(id),
    PRIMARY KEY (tags_id, cours_id)

);
 
 INSERT INTO categorie (nom, description) VALUES ('Informatique', 'Cours d''informatique');
INSERT INTO categorie (nom, description) VALUES ('Mathematique', 'Cours de mathematique');
INSERT INTO categorie (nom, description) VALUES ('Physique', 'Cours de physique');
INSERT INTO cours (nom, description, contenu, photo, categorie_id) VALUES 
('Introduction à la programmation', 'Cours de base en programmation', 'Contenu du cours', 'photo1.jpg', 1),
('Algèbre linéaire', 'Cours sur les matrices et les vecteurs', 'Contenu du cours', 'photo2.jpg', 2),
('Mécanique classique', 'Cours sur les lois du mouvement', 'Contenu du cours', 'photo3.jpg', 3);
INSERT INTO utilisateur (nom, prenom, email, password, role_id) VALUES ('admin', 'admin' , 'admin@admin.com', 'admin', 1);
insert into role ()VALUES ('admin', 'Administrateur', 'logo1.jpg');



