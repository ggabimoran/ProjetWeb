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
	name VARCHAR NOT NULL,
);

/************
 * PRODUITS *
 ************/
CREATE TABLE "product" (
	id SERIAL PRIMARY KEY,
	seller_id INTEGER NOT NULL,
	name VARCHAR NOT NULL,
	description TEXT,
	on_sale BOOLEAN DEFAULT TRUE
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



/* Jointures */
CREATE TABLE "product_category" (
	category_name VARCHAR,
	product_id INTEGER,
	PRIMARY KEY(category_name, product_id)
);

CREATE TABLE "product_image" (

