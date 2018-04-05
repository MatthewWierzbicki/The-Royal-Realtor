DROP TABLE IF EXISTS bedrooms;

CREATE TABLE bedrooms(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO bedrooms (value, property) VALUES (0, '');

INSERT INTO bedrooms (value, property) VALUES (1, '1 Bedroom');

INSERT INTO bedrooms (value, property) VALUES (2, '2 Bedrooms');

INSERT INTO bedrooms (value, property) VALUES (4, '3 Bedrooms');

INSERT INTO bedrooms (value, property) VALUES (8, '4 Bedrooms');
