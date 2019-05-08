DROP TABLE IF EXISTS"user";
DROP TABLE IF EXISTS"city";
DROP TABLE IF EXISTS"planet";
DROP TABLE IF EXISTS"product";
DROP TABLE IF EXISTS"image";
DROP TABLE IF EXISTS"category";
DROP TABLE IF EXISTS"product_category";
DROP TABLE IF EXISTS"product_image";
DROP TABLE IF EXISTS"purchase";

CREATE TABLE "user" (
	id SERIAL PRIMARY KEY,
	pseudo VARCHAR UNIQUE,
	password VARCHAR NOT NULL,
	address VARCHAR NOT NULL,
	city_id INTEGER NOT NULL,
	description TEXT
);

/*********
 * LIEUX *
 *********/
CREATE TABLE "city" (
	id SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	planet_id INTEGER NOT NULL
);

CREATE TABLE "planet" (
	id SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL
);

/************
 * PRODUITS *
 ************/
CREATE TABLE "product" (
	id SERIAL PRIMARY KEY,
	seller_id INTEGER NOT NULL,
	name VARCHAR NOT NULL,
	description TEXT,
	price FLOAT,
	number INTEGER
);

CREATE TABLE "image" (
	id SERIAL PRIMARY KEY,
	description TEXT,
	datas BYTEA NOT NULL
);

CREATE TABLE "category" (
	name VARCHAR PRIMARY KEY,
	description TEXT,
	super_category VARCHAR 
);

CREATE TABLE "delivery_system" (
	id SERIAL PRIMARY KEY,
	description TEXT,
	price FLOAT NOT NULL
);	

/* Jointures */
CREATE TABLE "product_category" (
	product_id INTEGER,
	category_name VARCHAR,
	PRIMARY KEY(product_id, category_name)
);

CREATE TABLE "product_image" (
	product_id INTEGER,
	image_id INTEGER,
	PRIMARY KEY(product_id, image_id)
);

CREATE TABLE "purchase" (
	product_id INTEGER,
	buyer_id INTEGER,
	pdate DATE,
	delivery_system_id INTEGER,
	PRIMARY KEY(product_id, buyer_id, pdate)
);



INSERT INTO "user" (id,pseudo,password,address,city_id,description) VALUES
(1, "Toto", "mdp", "30 Ruelle du Pingouin", "1", "First"),
(2, "Jean-Eude", "Argent", "5 Faubourg de la Cathédrale", "2", "Je suis riche");

INSERT INTO "city" VALUES
(1, "Evry", 1),
(2, "Paris", 1),
(3, "Alger", 2),
(4, "Amsterdam", 2),
(5, "Bamako", 11),
(6, "Bangui", 11),
(7, "Beijing", 12),
(8, "Berlin", 9),
(9, "Brasilia", 9),
(10, "Bruxelles", 8),
(11, "Budapest", 5),
(12, "Buenos Aires", 12),
(13, "Guatemala", 6),
(14, "Helsinki", 2),
(15, "Jakarta", 4),
(16, "La Havane", 5),
(17, "Luxembourg", 8),
(18, "Madrid", 4),
(19, "Monaco", 6),
(20, "Moskva", 4),
(21, "Santiago", 3),
(22, "Sarajevo", 5),
(23, "Stockholm", 11),
(24, "Tokyo", 10),
(25, "Tunis", 10);

INSERT INTO "planet" VALUES
(1, "Terre"),
(2, "Mercure"),
(3, "Vénus"),
(4, "Mars"),
(5, "Jupiter"),
(6, "Saturne"),
(7, "Uranus"),
(8, "Netpune"),
(9, "Céres"),
(10, "Pluton"),
(11, "Hauméa"),
(12, "Makémaké"),
(13, "Eris");

INSERT INTO "product" VALUES
(1, 2, "Tarte", "Le sucre c'est bon", 3.14, 10),
(2, 1, "Pelle", "Ca creuse bien!", 10, 1);

INSERT INTO "category" VALUES
("Nourriture", "Tout ce qui se mange", NULL),
("Outils", "Ici on bricole", NULL);

INSERT INTO "delivery_system" VALUES
(1, "Transport par FaidecsShip", 10);

INSERT INTO "product_category" VALUES
(1, "Nourriture"),
(2, "Outils");
