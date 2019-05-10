CREATE TABLE "messages"(
    sender INTEGER,
    receiver INTEGER,
    pdate DATE,
    message TEXT,
    PRIMARY KEY(sender,receiver,pdate),
    FOREIGN KEY (sender) REFERENCES users(id),
    FOREIGN KEY (receiver) REFERENCES users(id)
)

INSERT INTO messages VALUES
(1,2,'2019-03-06','Votre produit m''intéresse!'),
(8,7,'2019-05-05','La voiture est jolie.');