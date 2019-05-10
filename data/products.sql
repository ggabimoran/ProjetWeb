CREATE TABLE "product" (
	id SERIAL PRIMARY KEY,
	seller_id INTEGER NOT NULL 
	name VARCHAR NOT NULL,
	description TEXT,
	price FLOAT,
	FOREIGN KEY (seller_id) REFERENCES users(id)
);

CREATE TABLE "image" (
	id SERIAL PRIMARY KEY,
	path VARCHAR NOT NULL,
);

CREATE TABLE "supercategory"(
    name VARCHAR PRIMARY KEY,
)

CREATE TABLE "category" (
	name VARCHAR PRIMARY KEY,
    supercategory VARCHAR,
    FOREIGN KEY (supercategory) REFERENCES supercategory(name)
);


CREATE TABLE "product_category" (
	product_id INTEGER,
	category_name VARCHAR,
	PRIMARY KEY(product_id, category_name),
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (category_name) REFERENCES category(name)
);

CREATE TABLE "product_image" (
	product_id INTEGER,
	image_id INTEGER,
	PRIMARY KEY(product_id, image_id),
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (image_id) REFERENCES image(id)
);

INSERT INTO product VALUES
(1,4,'bottines','pointure 38 cuir',30.0),
(2,5,'canape','noir en cuir',180.0),
(3,11,'megane','5 ans, 80 000km, diesel',7000.0),
(4,7,'napperon','blanc',15.0),
(5,2,'sac gucci','cuir',50.0);

INSERT INTO image VALUES
(1,data/pictures/bottines.jpg),
(2,data/pictures/canape.jpg),
(3,data/pictures/megane.jpg),
(4,data/pictures/napperon.jpg),
(5,data/pictures/sac_gucci.jpg);

INSERT INTO product_image VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO supercategory VALUES
('EMPLOI'),
('VÉHICULES'),
('IMMOBILIER'),
('VACANCES'),
('MULTIMÉDIA'),
('LOISIRS'),
('MATÉRIEL PROFESSIONNEL'),
('SERVICES'),
('MAISON'),
('MODE'),
('AUTRES');

INSERT INTO category VALUES
('Offres d''emploi','EMPLOI'),
('Offres d''emploi Cadresnouveau','EMPLOI'),
('Voitures','VÉHICULES'),
('Motos','VÉHICULES'),
('Caravaning','VÉHICULES'),
('Utilitaires','VÉHICULES'),
('Équipement auto','VÉHICULES'),
('Équipement moto','VÉHICULES'),
('Équipement caravaning','VÉHICULES'),
('Nautisme','VÉHICULES'),
('Équipement nautisme','VÉHICULES'),
('Ventes immobilières','IMMOBILIER'),
('Immobilier Neufnouveau','IMMOBILIER'),
('Locations','IMMOBILIER'),
('Colocations','IMMOBILIER'),
('Bureaux & Commerces','IMMOBILIER'),
('Locations & Gîtes','VACANCES'),
('Chambres d''hôtes','VACANCES'),
('Campings','VACANCES'),
('Hôtels','VACANCES'),
('Hébergements insolites','VACANCES'),
('Informatique','MULTIMÉDIA'),
('Consoles & Jeux vidéo','MULTIMÉDIA'),
('Image & Son','MULTIMÉDIA'),
('Téléphonie','MULTIMÉDIA'),
('DVD - Films','LOISIRS'),
('CD - Musique','LOISIRS'),
('Livres','LOISIRS'),
('Animaux','LOISIRS'),
('Vélos','LOISIRS'),
('Sports & Hobbies','LOISIRS'),
('Instruments de musique','LOISIRS'),
('Collection','LOISIRS'),
('Jeux & Jouets','LOISIRS'),
('Vins & Gastronomie','LOISIRS'),
('Matériel agricole','MATÉRIEL PROFESSIONNEL'),
('Transport - Manutention','MATÉRIEL PROFESSIONNEL'),
('BTP - Chantier gros-oeuvre','MATÉRIEL PROFESSIONNEL'),
('Outillage - Matériaux 2nd-oeuvre','MATÉRIEL PROFESSIONNEL'),
('Équipements industriels','MATÉRIEL PROFESSIONNEL'),
('Restauration - Hôtellerie','MATÉRIEL PROFESSIONNEL'),
('Fournitures de bureau','MATÉRIEL PROFESSIONNEL'),
('Commerces & Marchés','MATÉRIEL PROFESSIONNEL'),
('Matériel médical','MATÉRIEL PROFESSIONNEL'),
('Prestations de services','SERVICES'),
('Travaux maisonnouveau','SERVICES'),
('Billetterie','SERVICES'),
('Évènements','SERVICES'),
('Cours particuliers','SERVICES'),
('Covoiturage','SERVICES'),
('Ameublement','MAISON'),
('Électroménager','MAISON'),
('Arts de la table','MAISON'),
('Décoration','MAISON'),
('Linge de maison','MAISON'),
('Bricolage','MAISON'),
('Jardinage','MAISON'),
('Videdressingnouveau','MODE'),
('Vêtements','MODE'),
('Chaussures','MODE'),
('Accessoires & Bagagerie','MODE'),
('Montres & Bijoux','MODE'),
('Équipement bébé','MODE'),
('Vêtements bébé','MODE');

INSERT INTO product_category VALUES
(1,'Chaussures'),
(2,'Ameublement'),
(3,'Voitures'),
(4,'Décoration'),
(5,'Accessoires & Bagagerie');





