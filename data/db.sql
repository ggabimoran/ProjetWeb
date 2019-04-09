CREATE TABLE "user" (
	id SERIAL PRIMARY KEY,
	pseudo VARCHAR NOT NULL,
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
	PRIMARY KEY(product_id, buyer_id, pdate);
);
