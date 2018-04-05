DROP TABLE IF EXISTS ownership_type;

CREATE TABLE ownership_type(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO ownership_type (value, property) VALUES (0, '');

INSERT INTO ownership_type (value, property) VALUES (1, 'For Sale');

INSERT INTO ownership_type (value, property) VALUES (2, 'For Rent');

INSERT INTO ownership_type (value, property) VALUES (4, 'For Lease');
