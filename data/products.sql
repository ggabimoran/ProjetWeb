CREATE TABLE "product" (
	id SERIAL PRIMARY KEY,
	seller_id INTEGER NOT NULL 
	name VARCHAR NOT NULL,
	description TEXT,
	price FLOAT,
	FOREIGN KEY (seller_id) REFERENCES user(id)
);

CREATE TABLE "image" (
	id SERIAL PRIMARY KEY,
	path VARCHAR NOT NULL,
);

CREATE TABLE "category" (
	name VARCHAR PRIMARY KEY,
);

CREATE TABLE "product_category" (
	product_id INTEGER,
	category_name VARCHAR,
	PRIMARY KEY(product_id, category_name),
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (category_name) REFERENCES category(name)
);

CREATE TABLE "product_image" (
	product_id INTEGER,
	image_id INTEGER,
	PRIMARY KEY(product_id, image_id),
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (image_id) REFERENCES image(id)
);