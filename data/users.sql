CREATE TABLE "users" (
	id SERIAL PRIMARY KEY,
	pseudo VARCHAR NOT NULL,
	password VARCHAR NOT NULL,
	city_id INTEGER NOT NULL 
    FOREIGN KEY (city_id) REFERENCES cities(id)
);

INSERT INTO customers VALUES 
(1,Emma,passwd,10453),
(2,Pierre,passwd,10453),
(3,Claude,passwd,10453),
(4,Jean,passwd,10453),
(5,Simon,passwd,10453),
(6,Gabriel,passwd,10453),
(7,Zixuan,passwd,10453),
(8,Noel,passwd,10453),
(9,Hui,passwd,17272),
(10,Alber,passwd,17272),
(11,Nathalie,passwd,17272),
(12,Léa,passwd,17272),
(13,Maurice,passwd,17272),
(14,Christophe,passwd,17272),
(15,Marcel,passwd,17272),
(16,Sébastien,passwd,17272);






















