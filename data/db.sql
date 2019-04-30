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
)	

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
	PRIMARY KEY(product_id, buyer_id, pdate);
);



INSERT INTO "user" VALUES
(1, "Toto", "Toto", "30 Ruelle du Pingouin", "1", "First"),
(2, "Jean-Eude", "Argent", "5 Faubourg de la Cathédrale", "2", "Je suis riche");

INSERT INTO "city" VALUES
(1, "Evry", 1),
(2, "Paris", 1),
(3, "Province", 1);

INSERT INTO "planet" VALUES
(1, "Terre"),
(2, "Mars"),
(3 "KinderBueno");

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
