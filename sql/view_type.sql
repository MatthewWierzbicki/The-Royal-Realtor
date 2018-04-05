DROP TABLE IF EXISTS view_type;

CREATE TABLE view_type(value SMALLINT PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO view_type (value, property) VALUES (0, '');

INSERT INTO view_type (value, property) VALUES (1, 'Water Front');

INSERT INTO view_type (value, property) VALUES (2, 'City Front');

INSERT INTO view_type (value, property) VALUES (4, 'Mountain View');

INSERT INTO view_type (value, property) VALUES (8, 'Suburban View');
