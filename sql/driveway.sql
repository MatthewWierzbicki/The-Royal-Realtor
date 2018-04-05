DROP TABLE IF EXISTS driveway;

CREATE TABLE driveway(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO driveway (value, property) VALUES (0, '');

INSERT INTO driveway (value, property) VALUES (1, '1 Car Driveway');

INSERT INTO driveway (value, property) VALUES (2, '2 Car Driveway');

INSERT INTO driveway (value, property) VALUES (4, '3 Car Driveway');

INSERT INTO driveway (value, property) VALUES (8, '4+ Car Driveway');

