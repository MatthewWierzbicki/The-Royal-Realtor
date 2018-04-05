DROP TABLE IF EXISTS listings;
DROP SEQUENCE IF EXISTS seq;
CREATE SEQUENCE seq START 1;
CREATE TABLE listings(
	listing_id int NOT NULL, 	
	user_id VARCHAR(20) NOT NULL REFERENCES users (user_id),
	status CHAR(1) NOT NULL,
	price NUMERIC NOT NULL,
	headline VARCHAR(100) NOT NULL,
	description VARCHAR(1000) NOT NULL,
	address VARCHAR(50) NOT NULL,
	postal_code CHAR(6) NOT NULL,
	images SMALLINT NOT NULL,
	city SMALLINT NOT NULL,
	bedrooms SMALLINT NOT NULL,
	bathrooms SMALLINT NOT NULL,
	addons SMALLINT NOT NULL,
	building_type SMALLINT NOT NULL,
	driveway SMALLINT NOT NULL,
	house_type SMALLINT NOT NULL,
	ownership_type SMALLINT NOT NULL,
	provinces CHAR(3) NOT NULL,
	view_type SMALLINT NOT NULL
 );
INSERT INTO listings(listing_id, user_id, status, price, headline, description, address, postal_code, images, city, bedrooms, bathrooms, addons, building_type, driveway, house_type, ownership_type, provinces, view_type)
VALUES(nextval('seq') , 'joachimm' , 'o', 5000000, 'Beautiful Townhouse with a Magnificant View!', 'A wonderfully build, communist era mansion in mint condition. Previously owned by several dictators, movie stars and a drug mule. At a whopping 300 square feet, it towers over many sheds in the area. Situated in the perfect neighbourhood to grow old in. In case of an apocalypse, this mansion is perfect to condition you to live a simpler life. It comes with several televisions(all of which run constantly, they can never be turned off; only down), a dog house, and a vintage custom faded fishing pole.', '99 Greenfield Crescent', 'L3N7T2', 0, 1, 3, 4, 2, 1, 2, 2, 3, 1, 4);
