DROP TABLE IF EXISTS status;
CREATE TABLE status(value VARCHAR(1) PRIMARY KEY NOT NULL, property VARCHAR(30) NOT NULL);
INSERT INTO status (value, property) VALUES ('o', 'Open');
INSERT INTO status (value, property) VALUES ('c', 'Closed');
INSERT INTO status (value, property) VALUES ('h', 'Hidden');
INSERT INTO status (value, property) VALUES ('s', 'Sold');





