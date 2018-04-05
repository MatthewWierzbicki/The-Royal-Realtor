DROP TABLE IF EXISTS house_type;

CREATE TABLE house_type(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO house_type (value, property) VALUES (0, '');

INSERT INTO house_type (value, property) VALUES (1, 'Seperated House');

INSERT INTO house_type (value, property) VALUES (2, 'Town House');

INSERT INTO house_type (value, property) VALUES (4, 'Apartment');

INSERT INTO house_type (value, property) VALUES (8, 'Bungalow');
