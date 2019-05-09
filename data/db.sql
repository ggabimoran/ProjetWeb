DROP TABLE IF EXISTS"countries" CASCADE;
DROP TABLE IF EXISTS"states" CASCADE;
DROP TABLE IF EXISTS"cities" CASCADE;
DROP TABLE IF EXISTS"user" CASCADE;
DROP TABLE IF EXISTS"product" CASCADE;
DROP TABLE IF EXISTS"image" CASCADE;
DROP TABLE IF EXISTS"category" CASCADE;
DROP TABLE IF EXISTS"delivery_system" CASCADE;
DROP TABLE IF EXISTS"product_category" CASCADE;
DROP TABLE IF EXISTS"product_image" CASCADE;
DROP TABLE IF EXISTS"purchase" CASCADE;

\i data/countries.sql;
\i data/states.sql;
\i data/cities.sql;
\i data/users.sql;

CREATE TABLE "purchase" (
	product_id INTEGER,
	buyer_id INTEGER,
	pdate DATE,
	delivery_system_id INTEGER,
	PRIMARY KEY(product_id, buyer_id, pdate),
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (buyer_id) REFERENCES user(id),
    FOREIGN KEY (delivery_system_id) REFERENCES delivery_system(id)
);


INSERT INTO product VALUES
(1, 2, 'Tarte', 'On aime le sucre', 3.14, 10),
(2, 1, 'Pelle', 'Ca creuse bien!', 10, 1),
(3, 1, 'Ordinateur', 'HP 5 ans', 100, 5),
(4, 1, 'Samsung', 'Modèle S8', 320, 6),
(5, 2, 'Ipad', 'Modèle 4G', 34, 14),
(6, 2, 'Bananes', 'Fraiches de Madagascar', 110, 5),
(7, 1, 'TV', '3D inclus', 4, 100),
(8, 1, 'Colle', 'A utiliser pour coller', 1, 23),
(9, 1, 'Avion de chasse','Fonctionne bien', 14, 43),
(10, 2, 'Millenium Faulcon', 'Toujours en bon état', 190, 1),
(11, 2, 'Sabre laser', 'En rouge', 3, 10),
(12, 1, 'Frites', 'Avec ketchup', 1, 13),
(13, 2, 'Diamant', 'Très joli', 314, 14),
(14, 1, 'Or', 'Encore joli', 132, 12),
(15, 2, 'Maillot de bain', 'Pour nager', 33214, 140),
(16, 1, 'Sirop de menthe', 'A boire', 13, 13);

INSERT INTO category VALUES
('Nourriture', 'Tout ce qui se mange', NULL),
('Outils', 'Ici on bricole', NULL);

INSERT INTO delivery_system VALUES
(1, 'Transport par FaidecsShip', 10);

INSERT INTO product_category VALUES
(1, 'Nourriture'),
(2, 'Outils');
