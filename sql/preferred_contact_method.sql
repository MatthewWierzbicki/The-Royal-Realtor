/*
Group 10
09/25/16
WEBD3201
*/
DROP TABLE IF EXISTS preferred_contact_method;
CREATE TABLE preferred_contact_method(value VARCHAR(1) PRIMARY KEY, property VARCHAR(30) NOT NULL);

INSERT INTO preferred_contact_method(value, property) VALUES('e', 'E-mail');
INSERT INTO preferred_contact_method(value, property) VALUES('p', 'Phone call');
INSERT INTO preferred_contact_method(value, property) VALUES('l', 'Letter post');
