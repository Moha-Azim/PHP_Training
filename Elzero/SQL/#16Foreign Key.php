<?php

/*

 Create Table clients With 3 Fields 
CREATE TABLE clients (
    id INT NOT NULL,
    username varchar(255) UNIQUE,
    email varchar(255) UNIQUE,
    PRIMARY KEY(id)
) ENGINE = INNODB;

 Create Table orders With 3 Fields 
CREATE TABLE orders (
    order_id INT NOT NULL,
    price varchar(255),
    client_id INT NOT NULL,
    PRIMARY KEY(order_id),
    FOREIGN KEY(client_id) REFERENCES clients(id)
) ENGINE = INNODB;


ALTER TABLE orders ADD FOREIGN KEY (client_id) REFERENCES clients(id);


    #17

ALTER TABLE orders ADD CONSTRAINT ordering FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE ON UPDATE CASCADE;

SELECT * FROM `orders` JOIN clients ON clients.id = orders.client_id WHERE clients.id = 1
*/