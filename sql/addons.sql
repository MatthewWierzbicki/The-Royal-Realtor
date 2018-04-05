DROP TABLE IF EXISTS addons;

CREATE TABLE addons(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO addons (value, property) VALUES (0, '');

INSERT INTO addons (value, property) VALUES (1, 'Fire Place');

INSERT INTO addons (value, property) VALUES (2, 'Pool');

INSERT INTO addons (value, property) VALUES (4, 'Air Conditioning');

INSERT INTO addons (value, property) VALUES (8, 'Garage');