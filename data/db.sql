DROP TABLE IF EXISTS"countries" CASCADE;
DROP TABLE IF EXISTS"states" CASCADE;
DROP TABLE IF EXISTS"cities" CASCADE;
DROP TABLE IF EXISTS"users" CASCADE;
DROP TABLE IF EXISTS"product" CASCADE;
DROP TABLE IF EXISTS"image" CASCADE;
DROP TABLE IF EXISTS"category" CASCADE;
DROP TABLE IF EXISTS"product_category" CASCADE;
DROP TABLE IF EXISTS"product_image" CASCADE;
DROP TABLE IF EXISTS"purchase" CASCADE;
DROP TABLE IF EXISTS"supercategory" CASCADE;
DROP TABLE IF EXISTS"messages" CASCADE;

\i data/countries.sql;
\i data/states.sql;
\i data/cities.sql;
\i data/users.sql;
\i data/products.sql;
\i data/messages.sql;
\i data/online_purchases.sql;


