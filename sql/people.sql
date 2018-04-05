/*
   Group 10
   09/25/16
   WEBD3201
   */
   DROP TABLE IF EXISTS people;
   CREATE TABLE people(
   	user_id VARCHAR(20) NOT NULL REFERENCES users (user_id),
   	salutation VARCHAR(10),
   	first_name VARCHAR(25) NOT  NULL,
   	last_name VARCHAR(50) NOT  NULL,
   	street_address_1 VARCHAR(75),
   	street_address_2 VARCHAR(75),
   	city VARCHAR(75),
   	province VARCHAR(200),
   	postal_code VARCHAR(6),
   	primary_phone_number VARCHAR(15) NOT NULL,
   	secondary_phone_number VARCHAR(10),
   	fax_number VARCHAR(10),
   	preferred_contact_method CHAR(1) NOT NULL
   );
   INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('darrenp' , 'Mr.' , 'Darren' , 'Puffer' , '255 durham college cres' , '' , 'ON' , 'Oshawa' , 'L1E4J6' , '9058529215' , '9058645201' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('nickc' , 'Mr.' , 'Nick' , 'Carpenter' , '234 jeanne street' , '' , 'ON' , 'Midland' , 'L4R2J3' , '9054551352' , '' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('mattheww' , 'Mr.' , 'Matthew' , 'Wierzbicki' , '99 Greenfield Cres' , '' , 'ON' , 'Whitby' , 'L1N7G2' , '9059658956' , '' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('kyreneh' , 'Ms.' , 'Kyrene' , 'Hemington' , '15 Bagshaw Cres' , '' , 'ON' , 'Uxbridge' , 'L9P0A9' , '9059605135' , '' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('simons' , 'Mr.' , 'Simon' , 'Stoll' , '25 Jane Dale Cres' , '' , 'ON' , 'Oshawa' , 'L5S5D5' , '9058529215' , '9058645201' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('husbyb' , 'Dr.' , 'Bernetta  ' , 'Husby' , '555 Husby Ct ' , '' , 'YT' , 'Markham' , 'Y6L7E0' , '2035828828' , '2034556218' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('payna' , 'Ms.' , 'Angele  ' , 'Payn' , '545 Payn Cres ' , '' , 'NB' , 'Oshawa' , 'E2E8H9' , '9797385024' , '9798693911' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('lepet' , 'Mrs.' , 'Trena  ' , 'Lepe' , '1995 Lepe Cres ' , '' , 'NT' , 'Ajax' , 'X0K3L5' , '7022999505' , '7028595462' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('dainek' , 'Mr.' , 'Kelly  ' , 'Daine' , '2655 Daine St ' , '' , 'ON' , 'Whitby' , 'L2Y4E6' , '6122524305' , '6125425999' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('rivkinb' , 'Dr.' , 'Brittney  ' , 'Rivkin' , '209 Rivkin St ' , '' , 'NB' , 'Uxbridge' , 'E3G2E3' , '9437197200' , '9434221586' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('ansarit' , 'Mrs.' , 'Tana  ' , 'Ansari' , '1132 Ansari St ' , '' , 'YT' , 'Whitby' , 'Y5S8J0' , '7358283014' , '7358769449' , '7359960423' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('terhaarc' , 'Mrs.' , 'Christene  ' , 'Terhaar' , '539 Terhaar Blvd ' , '' , 'ON' , 'Whitby' , 'L5P3E4' , '3555295168' , '3552887159' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('soreyr' , 'Ms.' , 'Retha  ' , 'Sorey' , '1179 Sorey St S' , '' , 'SK' , 'Bowmanville' , 'S3Z8L0' , '9882947069' , '9885093126' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('blenkerp' , 'Mr.' , 'Porfirio  ' , 'Blenker' , '919 Blenker Cres ' , '' , 'SK' , 'Bowmanville' , 'S2K5Z8' , '4907251252' , '4905983012' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('anguianom' , '' , 'Marceline  ' , 'Anguiano' , '1664 Anguiano St ' , '' , 'ON' , 'Ajax' , 'L2S9E6' , '6859277408' , '6858774707' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('gyatsos' , 'Dr.' , 'Sung  ' , 'Gyatso' , '1745 Gyatso St ' , '' , 'ON' , 'Bowmanville' , 'L3P6B3' , '2127267730' , '2127889524' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('praylowv' , 'Mrs.' , 'Vernie  ' , 'Praylow' , '2453 Praylow St ' , '' , 'NU' , 'Whitby' , 'X4K5W6' , '9193105021' , '9194413501' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('mittelsteadtf' , 'Mr.' , 'Fabian  ' , 'Mittelsteadt' , '2006 Mittelsteadt Ct ' , '' , 'AB' , 'Markham' , 'T9X6P5' , '5315065537' , '5315613852' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('forsethb' , 'Mr.' , 'Bernardo  ' , 'Forseth' , '1967 Forseth St ' , '' , 'ON' , 'Port Perry' , 'L8W6A9' , '5123729797' , '5129425313' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('joachimm' , 'Mr.' , 'Maximo  ' , 'Joachim' , '2899 Joachim Rd ' , '' , 'ON' , 'Pickering' , 'L3T4P1' , '4635677563' , '4632866053' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('saalfrankb' , 'Mr.' , 'Bennie  ' , 'Saalfrank' , '2640 Saalfrank St ' , '' , 'PE' , 'Oshawa' , 'C9S6T5' , '5398628573' , '5392013977' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('dibenedettit' , 'Mrs.' , 'Ta  ' , 'Dibenedetti' , '621 Dibenedetti St ' , '' , 'ON' , 'Port Perry' , 'L6R1L8' , '5627354183' , '5626392519' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('gesualdia' , 'Dr.' , 'Alise  ' , 'Gesualdi' , '2462 Gesualdi St E' , '' , 'ON' , 'Port Perry' , 'L9G1Y5' , '9283069174' , '9282827676' , '9288893311' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('langworthys' , '' , 'Sandie  ' , 'Langworthy' , '1814 Langworthy St ' , '' , 'ON' , 'Ajax' , 'L8J4H4' , '9364544301' , '9363708912' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('seashoreb' , 'Mr.' , 'Brad  ' , 'Seashore' , '1269 Seashore Rd ' , '' , 'BC' , 'Uxbridge' , 'V0R9A9' , '6434812950' , '6436203665' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('mcclamyy' , 'Mrs.' , 'Yolando  ' , 'Mcclamy' , '840 Mcclamy St S' , '' , 'ON' , 'Bowmanville' , 'L0L8K1' , '5876998849' , '5876657512' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('gravisn' , 'Mr.' , 'Neil  ' , 'Gravis' , '1938 Gravis St ' , '' , 'ON' , 'Oshawa' , 'L5V3N2' , '5919289215' , '5914345321' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('nicklec' , 'Ms.' , 'Carmina  ' , 'Nickle' , '2021 Nickle Cres ' , '' , 'ON' , 'Ajax' , 'L4E4X8' , '4387554991' , '4385087131' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('heishmanv' , 'Dr.' , 'Victor  ' , 'Heishman' , '1560 Heishman St N' , '' , 'NB' , 'Oshawa' , 'E4B2M3' , '9278527293' , '9279365172' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('delligattij' , 'Ms.' , 'Julian  ' , 'Delligatti' , '1956 Delligatti St ' , '' , 'MB' , 'Pickering' , 'R9E2N2' , '8045583271' , '8047998470' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('preciadoa' , 'Mr.' , 'Alfredo  ' , 'Preciado' , '2 Preciado St ' , '' , 'SK' , 'Port Perry' , 'S5Z8B5' , '4162813448' , '4169110496' , '4168189723' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('veshedskyl' , 'Mr.' , 'Luke  ' , 'Veshedsky' , '2036 Veshedsky St ' , '' , 'ON' , 'Whitby' , 'L8A9N7' , '4962961072' , '4963040030' , '4969495982' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('augustinet' , 'Ms.' , 'Tamala  ' , 'Augustine' , '1951 Augustine St N' , '' , 'ON' , 'Oshawa' , 'L6P8H9' , '8144095856' , '8146245974' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('perrettat' , 'Mrs.' , 'Tajuana  ' , 'Perretta' , '475 Perretta St ' , '' , 'ON' , 'Uxbridge' , 'L7N1E5' , '5118440027' , '5119504648' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('shriderm' , 'Ms.' , 'Marci  ' , 'Shrider' , '1477 Shrider Ct ' , '' , 'ON' , 'Uxbridge' , 'L7B6W1' , '9309334899' , '9302134651' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('bowyerl' , 'Mr.' , 'Laverne  ' , 'Bowyer' , '1083 Bowyer Cres ' , '' , 'NB' , 'Pickering' , 'E9T2T5' , '7086982222' , '7086177834' , '7089713096' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('frischmans' , '' , 'Shelby  ' , 'Frischman' , '1069 Frischman Cres ' , '' , 'NT' , 'Markham' , 'X1J2L3' , '7115540853' , '7116010163' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('brubakere' , '' , 'Erlinda  ' , 'Brubaker' , '393 Brubaker Blvd ' , '' , 'NB' , 'Port Perry' , 'E8V6H8' , '2749403700' , '2743092224' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('zelel' , 'Ms.' , 'Lolita  ' , 'Zele' , '2956 Zele St W' , '' , 'BC' , 'Markham' , 'V4H3P2' , '7396785311' , '7393053837' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('steenot' , 'Mr.' , 'Theron  ' , 'Steeno' , '2094 Steeno Cres ' , '' , 'NU' , 'Oshawa' , 'X5X1T6' , '5777693050' , '5774393007' , '5775657310' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('klammn' , 'Mr.' , 'Norman  ' , 'Klamm' , '1493 Klamm St ' , '' , 'NS' , 'Pickering' , 'B5L4A6' , '6734434783' , '6735661296' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('henionm' , 'Ms.' , 'Meagan  ' , 'Henion' , '836 Henion St ' , '' , 'PE' , 'Pickering' , 'C5Z4N5' , '4789579007' , '4789304559' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('leemasterm' , '' , 'Merrie  ' , 'Leemaster' , '2118 Leemaster St ' , '' , 'ON' , 'Pickering' , 'L6Y4V1' , '6136086973' , '6135862917' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('hammersleyd' , 'Ms.' , 'Delena  ' , 'Hammersley' , '558 Hammersley St ' , '' , 'NB' , 'Oshawa' , 'E3A2A6' , '4022191765' , '4022593654' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('wyrosdickc' , 'Mr.' , 'Chris  ' , 'Wyrosdick' , '1876 Wyrosdick St ' , '' , 'BC' , 'Markham' , 'V6T1W4' , '3712161184' , '3712741138' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('timchakf' , 'Dr.' , 'Fidelia  ' , 'Timchak' , '1288 Timchak St ' , '' , 'BC' , 'Uxbridge' , 'V1Z7K6' , '6456231405' , '6455573864' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('casterlinei' , 'Dr.' , 'Isaac  ' , 'Casterline' , '1516 Casterline St W' , '' , 'NB' , 'Uxbridge' , 'E8E5K7' , '9492670539' , '9496321291' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('dreessenw' , 'Mr.' , 'Wilburn  ' , 'Dreessen' , '777 Dreessen St ' , '' , 'ON' , 'Port Perry' , 'L2E3Y8' , '6077722641' , '6074245422' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('dileot' , 'Mr.' , 'Truman  ' , 'Dileo' , '1789 Dileo Cres ' , '' , 'YT' , 'Whitby' , 'Y4L2S3' , '9459637441' , '9452586208' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('beachlerl' , 'Mr.' , 'Luther  ' , 'Beachler' , '1391 Beachler St ' , '' , 'ON' , 'Oshawa' , 'L4X8B8' , '5844888730' , '5846378274' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('lawerk' , 'Ms.' , 'Kelle  ' , 'Lawer' , '1743 Lawer Cres ' , '' , 'PE' , 'Whitby' , 'C3S7E0' , '4685608314' , '4684519650' , '4685078763' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('hafemanc' , 'Mrs.' , 'Carlyn  ' , 'Hafeman' , '428 Hafeman St ' , '' , 'NT' , 'Oshawa' , 'X4V6V0' , '9983810368' , '9987385743' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('rezakb' , 'Ms.' , 'Brigida  ' , 'Rezak' , '2180 Rezak St S' , '' , 'ON' , 'Uxbridge' , 'L6P4S8' , '8186716353' , '8182017079' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('rollinsons' , 'Mrs.' , 'Shenika  ' , 'Rollinson' , '2005 Rollinson St ' , '' , 'NT' , 'Uxbridge' , 'X9A7S2' , '7863407001' , '7862243998' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('berauns' , 'Mr.' , 'Stephen  ' , 'Beraun' , '2995 Beraun Ct ' , '' , 'NL' , 'Markham' , 'A8R6M4' , '7273143659' , '7274343212' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('batunb' , '' , 'Brock  ' , 'Batun' , '249 Batun Blvd ' , '' , 'ON' , 'Markham' , 'L3N4L4' , '7228671027' , '7229238021' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('lewina' , 'Dr.' , 'Arica  ' , 'Lewin' , '713 Lewin Blvd ' , '' , 'BC' , 'Ajax' , 'V8W7Z0' , '5824980380' , '5829486147' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('rigauda' , 'Ms.' , 'Anjelica  ' , 'Rigaud' , '2834 Rigaud Blvd ' , '' , 'ON' , 'Pickering' , 'L0A5P2' , '7986729531' , '7982889228' , '7985950330' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('cacholaf' , 'Ms.' , 'Florida  ' , 'Cachola' , '1343 Cachola St ' , '' , 'ON' , 'Port Perry' , 'L8Z2L3' , '5573587957' , '5573786560' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('bronsone' , 'Dr.' , 'Erik  ' , 'Bronson' , '890 Bronson St ' , '' , 'NL' , 'Whitby' , 'A8N4H5' , '3294969856' , '3299711027' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('birdsongj' , 'Mr.' , 'Jae  ' , 'Birdsong' , '1346 Birdsong St S' , '' , 'QC' , 'Whitby' , 'J5P7H8' , '7567940894' , '7569823905' , '7564353058' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('antinarellit' , 'Dr.' , 'Tari  ' , 'Antinarelli' , '1690 Antinarelli St N' , '' , 'BC' , 'Ajax' , 'V8C6W7' , '4067353043' , '4067827243' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('delaluzr' , 'Ms.' , 'Roberto  ' , 'Delaluz' , '1084 Delaluz Ct ' , '' , 'NU' , 'Pickering' , 'X7G7Y4' , '6039550566' , '6038036310' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('talamantej' , 'Mr.' , 'Jude  ' , 'Talamante' , '1429 Talamante St ' , '' , 'ON' , 'Ajax' , 'L1H1P3' , '7834112690' , '7833941599' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('haseh' , 'Mr.' , 'Henry  ' , 'Hase' , '2407 Hase Cres ' , '' , 'PE' , 'Oshawa' , 'C0T2V7' , '4862553946' , '4866693149' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('buchanonn' , 'Mr.' , 'Nigel  ' , 'Buchanon' , '201 Buchanon St S' , '' , 'QC' , 'Whitby' , 'J6T9E5' , '5743459828' , '5743045869' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('slippr' , '' , 'Robert  ' , 'Slipp' , '2627 Slipp Rd ' , '' , 'ON' , 'Oshawa' , 'L1E4J6' , '2868834530' , '2865216260' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('citranoj' , 'Mr.' , 'Jake  ' , 'Citrano' , '67 Citrano Cres ' , '' , 'ON' , 'Markham' , 'L0X8C4' , '9718715574' , '9719790603' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('dahmers' , 'Dr.' , 'Shante  ' , 'Dahmer' , '2375 Dahmer Ct ' , '' , 'ON' , 'Uxbridge' , 'L1S0Y3' , '7762999886' , '7765896097' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('butoracs' , 'Mr.' , 'Sam  ' , 'Butorac' , '2913 Butorac Cres ' , '' , 'AB' , 'Ajax' , 'T4P8J8' , '6858483203' , '6854766696' , '6853773411' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('tuccilloc' , 'Dr.' , 'Carolina  ' , 'Tuccillo' , '625 Tuccillo St ' , '' , 'QC' , 'Uxbridge' , 'J6M8P0' , '7326739628' , '7329531890' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('marsigliad' , 'Ms.' , 'Deonna  ' , 'Marsiglia' , '2428 Marsiglia St S' , '' , 'NT' , 'Bowmanville' , 'X8V6B7' , '9436687802' , '9438739829' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('schanc' , 'Mr.' , 'Clarence  ' , 'Schan' , '2796 Schan St ' , '' , 'PE' , 'Ajax' , 'C5H8G6' , '5848996031' , '5847866971' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('byoner' , 'Mr.' , 'Robert  ' , 'Byone' , '2947 Byone St ' , '' , 'BC' , 'Whitby' , 'V1W1E6' , '5805921450' , '5806151051' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('medalk' , 'Mr.' , 'Kim  ' , 'Medal' , '2601 Medal St ' , '' , 'NB' , 'Ajax' , 'E8X9R4' , '6559701800' , '6556875017' , '6552381737' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('agrom' , 'Mr.' , 'Matthew  ' , 'Agro' , '2702 Agro St N' , '' , 'ON' , 'Markham' , 'L9K5R2' , '7449257953' , '7446168038' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('mohamadm' , '' , 'Melissa  ' , 'Mohamad' , '2067 Mohamad St ' , '' , 'QC' , 'Ajax' , 'J2R6B4' , '9468560420' , '9466042853' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('hiserp' , 'Mrs.' , 'Paulita  ' , 'Hiser' , '582 Hiser St ' , '' , 'AB' , 'Pickering' , 'T0B6P5' , '4834041640' , '4834419751' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('eustacec' , 'Mr.' , 'Carl  ' , 'Eustace' , '2091 Eustace St ' , '' , 'AB' , 'Port Perry' , 'T3R9C9' , '9826954342' , '9827511754' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('muckenthalerv' , 'Ms.' , 'Vanita  ' , 'Muckenthaler' , '2938 Muckenthaler Rd ' , '' , 'ON' , 'Pickering' , 'L5L0J6' , '4668525542' , '4669605460' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('manicciak' , 'Dr.' , 'Kemberly  ' , 'Maniccia' , '2498 Maniccia Rd ' , '' , 'ON' , 'Whitby' , 'L3L3E1' , '6125622809' , '6127928281' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('chafetzt' , 'Mr.' , 'Terrell  ' , 'Chafetz' , '303 Chafetz St ' , '' , 'AB' , 'Ajax' , 'T1C5S9' , '6187538819' , '6189982785' , '6186180632' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('minierw' , 'Mr.' , 'Wilbert  ' , 'Minier' , '297 Minier St ' , '' , 'ON' , 'Ajax' , 'L2H8G7' , '8242426264' , '8247074097' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('deierleino' , '' , 'Oda  ' , 'Deierlein' , '1058 Deierlein St ' , '' , 'ON' , 'Pickering' , 'L2V0H3' , '8823473821' , '8828992773' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('pevetoa' , '' , 'Anabel  ' , 'Peveto' , '570 Peveto St E' , '' , 'NT' , 'Ajax' , 'X8N4N3' , '8209383176' , '8203338004' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('merlinig' , 'Dr.' , 'Georgina  ' , 'Merlini' , '54 Merlini St ' , '' , 'NS' , 'Markham' , 'B8L7E9' , '7634408585' , '7635349093' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('weatherbees' , 'Dr.' , 'Shonda  ' , 'Weatherbee' , '2226 Weatherbee Rd ' , '' , 'ON' , 'Bowmanville' , 'L1X4X5' , '4358779877' , '4352278399' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('lograssoi' , 'Dr.' , 'Ines  ' , 'Lograsso' , '730 Lograsso St ' , '' , 'YT' , 'Bowmanville' , 'Y2J7A7' , '2507625820' , '2509769321' , '2505588061' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('boben' , 'Mr.' , 'Nestor  ' , 'Bobe' , '160 Bobe Ct ' , '' , 'ON' , 'Pickering' , 'L5A4E1' , '9462874729' , '9464537035' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('brisbine' , 'Mr.' , 'Emory  ' , 'Brisbin' , '1911 Brisbin St ' , '' , 'ON' , 'Ajax' , 'L2M8X1' , '9612157675' , '9615994178' , '9617698989' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('strassnerr' , 'Mrs.' , 'Renna  ' , 'Strassner' , '1814 Strassner St ' , '' , 'BC' , 'Oshawa' , 'V4N6C6' , '8614099957' , '8618454652' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('basilc' , 'Dr.' , 'Clement  ' , 'Basil' , '1836 Basil Blvd ' , '' , 'SK' , 'Bowmanville' , 'S2T2V3' , '3984291406' , '3986910895' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('pestonee' , 'Ms.' , 'Eveline  ' , 'Pestone' , '2149 Pestone St ' , '' , 'SK' , 'Markham' , 'S6Y6S5' , '3235641043' , '3236669059' , '3232417217' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('rodarmelt' , 'Mr.' , 'Tyron  ' , 'Rodarmel' , '2729 Rodarmel St ' , '' , 'ON' , 'Port Perry' , 'L8B5R0' , '4352356287' , '4352304510' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('romanicks' , 'Mrs.' , 'Sandra  ' , 'Romanick' , '2833 Romanick Rd ' , '' , 'BC' , 'Port Perry' , 'V1X4E5' , '9182640958' , '9186479775' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('stonebackc' , 'Mr.' , 'Chang  ' , 'Stoneback' , '114 Stoneback St ' , '' , 'ON' , 'Pickering' , 'L0T4Z4' , '5288812395' , '5284266705' , '' , 'l');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('sarberl' , '' , 'Lue  ' , 'Sarber' , '1549 Sarber St ' , '' , 'NT' , 'Bowmanville' , 'X0C5A6' , '2394495657' , '2396541463' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('fagnantn' , 'Mrs.' , 'Noriko  ' , 'Fagnant' , '1620 Fagnant St W' , '' , 'PE' , 'Uxbridge' , 'C0J8V3' , '6479464941' , '6477935597' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('woodromem' , '' , 'Mae  ' , 'Woodrome' , '419 Woodrome Ct ' , '' , 'ON' , 'Pickering' , 'L5X0B8' , '7798981794' , '7794697738' , '7798811507' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('schanka' , 'Ms.' , 'Adelina  ' , 'Schank' , '2526 Schank St W' , '' , 'NB' , 'Bowmanville' , 'E5W0E9' , '9228823023' , '9222688898' , '9229716816' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('hoshawm' , 'Dr.' , 'Maurine  ' , 'Hoshaw' , '2788 Hoshaw Ct ' , '' , 'SK' , 'Port Perry' , 'S6K1N4' , '3656168467' , '3655168866' , '3653366944' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('peshk' , 'Mr.' , 'Keven  ' , 'Pesh' , '2140 Pesh Ct ' , '' , 'ON' , 'Whitby' , 'L4C0L8' , '9496288422' , '9494317140' , '9498014465' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('spary' , 'Mrs.' , 'Yesenia  ' , 'Spar' , '2618 Spar Blvd ' , '' , 'BC' , 'Markham' , 'V0G7T1' , '2335403335' , '2336465808' , '' , 'p');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('handwerks' , '' , 'Sherril  ' , 'Handwerk' , '1404 Handwerk St E' , '' , 'NB' , 'Oshawa' , 'E9N0Z3' , '8828148735' , '8823512178' , '' , 'e');
INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)
VALUES('galiotom' , '' , 'Mina  ' , 'Galioto' , '2629 Galioto St ' , '' , 'PE' , 'Uxbridge' , 'C4Z2T3' , '7867015904' , '7868239938' , '' , 'e');
