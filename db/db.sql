-- Active: 1735518593047@@127.0.0.1@3306@yourcours
CREATE DATABASE yourCours;
USE yourCours;

CREATE TABLE categories (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT
);
CREATE TABLE tags (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(25) ,
description TEXT,
logo VARCHAR (255)
);
CREATE TABLE etiquettes (
id INT PRIMARY KEY AUTO_INCREMENT,
tag_id INT,
FOREIGN KEY (tag_id) REFERENCES tags(id),
categorie_id INT,
FOREIGN KEY (categorie_id) REFERENCES categories(id)
);

CREATE TABLE cours (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT ,
contenu VARCHAR (255),
photo VARCHAR (255),
etiquettes_id INT,
FOREIGN KEY (etiquettes_id) REFERENCES etiquettes (id)
);

CREATE TABLE roles (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) ,
description TEXT,
logo VARCHAR (255)
);
 
CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE courses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    course_description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



SELECT * FROM courses;
prenom VARCHAR(25) ,
email VARCHAR(255) ,
password VARCHAR(255) ,
role_id INT,
FOREIGN KEY (role_id) REFERENCES roles(id)
);



CREATE TABLE cours_tags (
    tags_id INT,
    Foreign Key (tags_id) REFERENCES tags(id),
    cours_id INT,
    Foreign Key (cours_id) REFERENCES cours(id),
    PRIMARY KEY (tags_id, cours_id)

);
INSERT INTO users (nom, prenom, email, password, role) VALUES ('admin', 'admin' , 'admin@gmail.com', 'admin', 'admin');
INSERT INTO roles (nom, description, logo) VALUES ('admin', 'Administrateur', 'logo1.jpg');
select * from users;
 
 INSERT INTO categories (nom, description) VALUES ('Informatique', 'Cours d''informatique');
INSERT INTO categories (nom, description) VALUES ('Mathematique', 'Cours de mathematique');
INSERT INTO categories (nom, description) VALUES ('Physique', 'Cours de physique');
INSERT INTO cours (nom, description, contenu, photo, categorie_id) VALUES 
('Introduction à la programmation', 'Cours de base en programmation', 'Contenu du cours', 'photo1.jpg', 1),
('Algèbre linéaire', 'Cours sur les matrices et les vecteurs', 'Contenu du cours', 'photo2.jpg', 2),
('Mécanique classique', 'Cours sur les lois du mouvement', 'Contenu du cours', 'photo3.jpg', 3);
INSERT INTO utilisateurs (nom, prenom, email, password, role_id) VALUES ('admin', 'admin' , 'admin@admin.com', 'admin', 1);
insert into roles ()VALUES ('admin', 'Administrateur', 'logo1.jpg');
insert into roles ()VALUES ('etudiant', 'Etudiant', 'logo2.jpg');

insert into tags (nom, description, logo) VALUES ('java', 'Cours sur le langage de programmation Java', 'logo1.jpg');
