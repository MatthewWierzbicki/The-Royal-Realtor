<?php include "names.php";
   include "header.php";
   	$createsqllistings = 'DROP TABLE IF EXISTS listings;
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
	view_type SMALLINT NOT NULL);';
   $k = 0;
   $salutations               = Array(
       "",
       "Mr.",
       "Mrs.",
       "Mr.",
       "Ms.",
       "Dr."
   );
   $first_name ="";
   $last_name                 = "";
   $postal_code                = "";
   $user_id                   = NULL;
   $primary_phone_number      = NULL;
   $secondary_phone_number    = NULL;
   $fax_number                = NULL;
   $street_address_2         = NULL;
   $user_type = NULL;
   $enrol_date = "2016-10-10";
   $last_access = "2016-10-10";
   $user_types = array("P","C","C","C","C","C","G","I","G","G","C","C","C","C","C","C","I","C","I","P","D","D");
   $password = "webd3201";
   $service_providers         = array(
       "@rogers.com",
       "@gmail.com",
       "@hotmail.com",
       "@yahoo.ca",
       "@outlook.com",
       "@" . $last_name . "realtor.ca"
   );
   $citys                     = array(
      4,
      2,
       1,
      16,
       32,
       64,
      128,
       8
   );
   $provs                     = array(
       "ON",

       "ON",
       "ON",
       "ON",
       "ON",
       "ON",
       "ON",
       "ON",
       "ON",
       "ON"
   );
   $postal_code_letters        = array(
       'A',
       'B',
       'C',
       'E',
       'G',
       'H',
       'J',
       'K',
       'L',
       'M',
       'N',
       'P',
       'R',
       'S',
       'T',
       'V',
       'W',
       'X',
       'Y',
       'Z'
   );
   $street_direction          = array(
       '',
       '',
       'S',
       'W',
       'E',
       '',
       'N',
       '',
       '',
       '',
       ''
   );
   $street_road_type          = array(
       'St',
       'Cres',
       'Blvd',
       'Rd',
       'Ct',
       'St',
       'St',
       'St',
       'St',
       'St'
   );
   $statusValue 		= array(
   'C',
   'C',
   'C',
   'O',
   'O',
   'O',
   'O',
   'O',
   'O',
   'O',
   'O',
   'O',
   );
   $priceValue = array(
   49999,
   100000,
   100000,
   100000,
   100000,
   149999,
   149999,
   149999,
   149999,
   149999,
   200000,
   200000,
   200000,
   200000,
   200000,
   200000,
   249999,
   249999,
   249999,
   300000,
   300000,
   300000,
   300000,
   349000,
   349000,
   349000,
   400000,
   449000,
   449000,
   449000,
   449000,
   449000,
   449000,
   449000,
   500000,
   500000,
   500000,
   549999,
   549999,
   549999,
   549999,
   600000,
   600000,
   600000,
   600000,
   649999,
   649999,
   649999,
   649999,
   700000,
   749999,
   800000,
   849999,
   900000,
   900000,
   949999,
   1000000,
   );
	$house_description = array(
	'A beautiful',
	'An outstanding',
	'An amazing',
	'A fantastic',
	'A wonderful',
	'A groovy',
	'A shagadelic'
	);
	$endingTag = array(
	' in the heart of',
	' with an incredible view!',
	);

	$eight  = array (
	1,
	2,
	4,
	8
	);
	$four = array (
	1,
	2,
	4
	);
	$user_ids = array(
"joachimm",
"pilis",
"deierleino",
"brisbine",
"fagnantn",
"woodromem",
"handwerks",
"everidgez",
"mcnelist",
"montemayore",
"farinod",
"zahnenb",
"lauferr",
"dettmanl",
"jowersi",
"preisserr",
"tellisr",
"lalondes",
"ziererd",
);

  function randomPick($array)
   {
       $min  = 0;
       $max  = count($array);
       $name = $array[rand($min, $max - 1)];
       return $name;
   
   }
     while ($k < 1500)
   {
       $user_id                = NULL;
       $street_address         = NULL;
       $street_address_2         = NULL;
   
       $postal_code             = NULL;
       $primary_phone_number   = NULL;
       $secondary_phone_number = NULL;
       $fax_number             = NULL;
       //City
       $city = randomPick($citys);
       //Province
       $prov = randomPick($provs);
       //Postal Code
       switch ($prov) {
           case 'ON':
               $postal_code .= "L";
               break;
           case 'AB':
               $postal_code .= "T";
               break;
           case 'BC':
               $postal_code .= "V";
               break;
           case 'MB':
               $postal_code .= "R";
               break;
           case 'NB':
               $postal_code .= "E";
               break;
           case 'NL':
               $postal_code .= "A";
               break;
           case 'NS':
               $postal_code .= "B";
               break;
           case 'NT':
               $postal_code .= "X";
               break;
           case 'NU':
               $postal_code .= "X";
               break;
           case 'PE':
               $postal_code .= "C";
               break;
           case 'QC':
               $postal_code .= "J";
               break;
           case 'SK':
               $postal_code .= "S";
               break;
           case 'YT':
               $postal_code .= "Y";
               break;
       }
       $postal_code .= rand(0, 9);
       $postal_code .= randomPick($postal_code_letters);
       $postal_code .= rand(0, 9);
       $postal_code .= randomPick($postal_code_letters);
       $postal_code .= rand(0, 9);
       //Street Address
       $street_address .= rand(1, 3000) . " ";
	   $last_name = randomPick($last_names);
       $street_address .= $last_name . " ";
       $street_address .= randomPick($street_road_type) . " ";
       if (strpos($street_address, 'St') !== false) {
           $street_address .= randomPick($street_direction);
       }
	$status = randomPick($statusValue);
	$price = randomPick($priceValue);

	$image=0;
	$bedrooms = randomPick($eight);
	$bathrooms = randomPick($eight);
	$addon = rand(0,14);
	$building_type = randomPick($four);
	$driveway = randomPick($eight);
	$house_type = randomPick($eight);
	$ownership_type = randomPick($four);
	$view_type = randomPick($eight);
	$province = randomPick($provs);
	$adjective = randomPick($house_description);
	$headline =  randomPick($house_description) . " " . $house_type . " ";
	$tempHeadline =  randomPick($endingTag);
	if ($tempHeadline == " in the heart of")
	{
		$headline .= $tempHeadline . " " . $city;
	}else
	{
		$headline .= $tempHeadline;
	}
   	//Fix Letters
   
  	$street_address = ucwords(strtolower($street_address));
   	    $street_address = str_replace("'", "''", $street_address);

	if ($house_type == 1)
	{
		$desc_house_type = "separated house";
	}
	else if ($house_type == 2)
	{
		$desc_house_type = "town house";
	}
	else if ($house_type == 4)
	{
		$desc_house_type = "apartment";
	}
	else if ($house_type == 8)
	{
		$desc_house_type = "bungalow";
	}
	if ($view_type == 1)
	{
		$desc_view_type = "water front view";
	}
	else if ($view_type == 2)
	{
		$desc_view_type = "city front view";
	}
	else if ($view_type == 4)
	{
		$desc_view_type = "mountain view";
	}
	else
	{
		$desc_view_type = "suburban view";
	}
	$description = $adjective . " " . $desc_house_type . " in " . $province . " located at " . $street_address . " with a " . $desc_view_type . ". The property is listed at the very reasonable price of, $" . number_format($price) . ".";
	
	$headline = $adjective . " " . $desc_house_type . " in " . $province;
	$user_id = randomPick($user_ids);
   	$createsqllistings .= "INSERT INTO listings(listing_id, user_id, status, price, headline, description, address, postal_code, images, city, bedrooms, bathrooms, addons, building_type, driveway, house_type, ownership_type, provinces, view_type)". "\r\n" . "VALUES('" . $k. "' , '" . $user_id . "' , '" . $status . "' , '" . $price . "' , '" . $headline . "' , '" . $description . "' , '" . $street_address . "' , '" .$postal_code . "' , '" . $city . "' , '" . $bedrooms . "' , '" . $bathrooms . "' , '" . $addon . "' , '" . $building_type . "' , '" . $driveway . "' , '" . $house_type . "' , '" . $ownership_type . "' , '" . $ownership_type . "' , '" . $province . "' , '" . $view_type ."');"."\r\n";
	
	//Echo Information so far in order
	echo $k . "<br/>";
   	echo $status . "<br/>";
	echo number_format($price) . "<br/>";
	echo $headline . "<br/>";
	echo $description  . "<br/>";
	echo $street_address . "<br/>";
	echo $postal_code . "<br/>";
	echo "image :" . $image  . "<br/>";
	echo "City :" . $city  . "<br/>";
	echo "Bedrooms: " . $bedrooms. "<br/>"; 
	echo "Bathrooms: " . $bathrooms. "<br/>"; 
	echo "Addon: " . $addon . "<br/>";
	echo "BulidingType: " . $building_type . "<br/>";
	echo "Driveway: " . $driveway . "<br/>";
	echo "House Type: ". $house_type . "<br/>";
	echo "Province " . $province . "<br/>";
	echo "View Type: " . $view_type . "<br/>";
	echo "<br/>";

   	$k++;


   }
   	echo $createsqllistings;
   	$file2 = fopen("listings.sql","w");
   	fwrite($file2,$createsqllistings);
   	include "footer.php";
   ?>