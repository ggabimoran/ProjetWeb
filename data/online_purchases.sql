CREATE TABLE "purchase" (
	product_id INTEGER,
	buyer_id INTEGER,
	pdate DATE,
	PRIMARY KEY(product_id, buyer_id, pdate),
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (buyer_id) REFERENCES users(id)
);

INSERT INTO purchase VALUES
(1,1,'2019-08-09'),
(5,2,'2019-04-04');