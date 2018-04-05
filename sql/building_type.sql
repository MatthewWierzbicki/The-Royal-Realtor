DROP TABLE IF EXISTS building_type;

CREATE TABLE building_type(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO building_type (value, property) VALUES (0, '');

INSERT INTO building_type (value, property) VALUES (1, 'Residential');

INSERT INTO building_type (value, property) VALUES (2, 'Recreational');

INSERT INTO building_type (value, property) VALUES (4, 'Commercial');


