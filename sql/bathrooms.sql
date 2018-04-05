DROP TABLE IF EXISTS bathrooms;

CREATE TABLE bathrooms(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO bathrooms (value, property) VALUES (0, '');

INSERT INTO bathrooms (value, property) VALUES (1, '1 Bathroom');

INSERT INTO bathrooms (value, property) VALUES (2, '2 Bathroom');

INSERT INTO bathrooms (value, property) VALUES (4, '3 Bathroom');

INSERT INTO bathrooms (value, property) VALUES (8, '4+ Bathroom');