DROP TABLE IF EXISTS cities;

CREATE TABLE cities(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO cities (value, property) VALUES (0, '');

INSERT INTO cities (value, property) VALUES (1, 'Whitby');

INSERT INTO cities (value, property) VALUES (2, 'Oshawa');

INSERT INTO cities (value, property) VALUES (4, 'Ajax');

INSERT INTO cities (value, property) VALUES (8, 'Pickering');

INSERT INTO cities (value, property) VALUES (16, 'Uxbridge');

INSERT INTO cities (value, property) VALUES (32, 'Bowmanville');

INSERT INTO cities (value, property) VALUES (64, 'Markham');

INSERT INTO cities (value, property) VALUES (128, 'Port Perry');