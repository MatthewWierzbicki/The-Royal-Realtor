<?php
include "names.php";
	$createsqlpeople = '/*
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
);'."\r\n";
$createsqlusers = "
DROP TABLE IF EXISTS users CASCADE;
CREATE TABLE users(
	user_id VARCHAR(20) PRIMARY KEY,
	password VARCHAR(32) NOT  NULL,
	user_type CHAR(1) NOT  NULL,
	email_address VARCHAR(256) NOT  NULL,
	enrol_date DATE NOT  NULL,
	last_access DATE NOT  NULL
);"."\r\n";
$k                         = 0;
$salutations               = Array(
    "",
    "Mr.",
    "Mrs.",
    "Mr.",
    "Ms.",
    "Dr."
);
$last_name                 = "";
$postal_code                = "";
$user_id                   = NULL;
$primary_phone_number      = NULL;
$secondary_phone_number    = NULL;
$fax_number                = NULL;
$street_address_2         = NULL;
$enrol_date = "2016-10-10";
$last_access = "2016-10-10";
$user_type = "A";
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
    "Ajax",
    "Oshawa",
    "Whitby",
    "Uxbridge",
    "Bowmanville",
    "Markham",
    "Port Perry",
    "Pickering"
);
$provs                     = array(
    "ON",
    "AB",
    "BC",
    "MB",
    "NB",
    "NL",
    "NS",
    "NT",
    "NU",
    "ON",
    "ON",
    "ON",
    "ON",
    "ON",
    "ON",
    "ON",
    "ON",
    "ON",
    "BC",
    "PE",
    "QC",
    "SK",
    "YT"
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
$preferred_contact_methods = array(
    'l',
    'l',
    'e',
    'e',
    'e',
    'e',
    'e',
    'p',
    'p',
    'p'
);
$fax                       = array(
    'Y',
    'N',
    'N',
    'N',
    'N',
    'N'
);
$primary_phone_numbers     = array(
    905,
    289,
    416
);
function randomPick($array)
{
    $min  = 0;
    $max  = count($array);
    $name = $array[rand($min, $max - 1)];
    return $name;
}
while ($k < 100) {
    $user_id                = NULL;
    $street_address         = NULL;
    $street_address_2         = NULL;

    $postal_code             = NULL;
    $primary_phone_number   = NULL;
    $secondary_phone_number = NULL;
    $fax_number             = NULL;
    //Salutations
    $salutation             = randomPick($salutations);
    //Last Names
    $last_name              = randomPick($last_names);
    //First Names based off Salutations.
    switch ($salutation) {
        case 'Mr.':
            $first_name = randomPick($male_names);
            break;
        case 'Mrs.':
            $first_name = randomPick($female_names);
            break;
        case 'Ms.':
            $first_name = randomPick($female_names);
            break;
        case 'Dr.':
            $combined_names = array_merge($female_names, $male_names);
            $first_name     = randomPick($combined_names);
            break;
        case '':
            $combined_names = array_merge($female_names, $male_names);
            $first_name     = randomPick($combined_names);
            break;
    }
    //E-mail
    $service_provider = randomPick($service_providers);
    $email            = $first_name . "." . $last_name . $service_provider;
    
    //Phone Numbers
    $primary_phone_number   = $primary_phone_number . rand(200, 999);
    $secondary_phone_number = $primary_phone_number;
    $primary_phone_number   = $primary_phone_number . rand(200, 999);
    
    for ($j = 0; $j < 4; $j++) {
        $primary_phone_number = $primary_phone_number . rand(0, 9);
    }
    $secondary_phone_number = $secondary_phone_number . rand(200, 999);
    for ($j = 0; $j < 4; $j++) {
        $secondary_phone_number = $secondary_phone_number . rand(0, 9);
    }
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
    $street_address .= $last_name . " ";
    $street_address .= randomPick($street_road_type) . " ";
    if (strpos($street_address, 'St') !== false) {
        $street_address .= randomPick($street_direction);
    }
    //Contact Method
    $preferred_contact_method = randomPick($preferred_contact_methods);
    if (randomPick($fax) == "Y") {
        $fax_number = substr($primary_phone_number, 0, 3);
        $fax_number = $fax_number . rand(200, 999);
        for ($j = 0; $j < 4; $j++) {
            $fax_number = $fax_number . rand(0, 9);
        }
    }
    //USERID Creation
    $user_id = $last_name . substr($first_name, 0, 1);

	$user_id=str_replace("'", "", $user_id);
	$email=str_replace("'", "", $email);
	$street_address=str_replace("'", "", $street_address);
	$last_name=str_replace("'", "''", $last_name);
	$createsqlpeople .="INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)". "\r\n" . "VALUES('" . $user_id . "' , '" . $salutation . "' , '" . $first_name . "' , '" . $last_name . "' , '" . $street_address . "' , '" . $street_address_2 . "' , '" . $prov . "' , '" . $city . "' , '" . $postal_code . "' , '" . $primary_phone_number . "' , '" . $secondary_phone_number . "' , '" . $fax_number . "' , '" . $preferred_contact_method . "');"."\r\n";
	
	$createsqlusers .="INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)" . "\r\n" . "VALUES('" . $user_id . "' , '" . $password. "' , '" . $user_type . "' , '" . $email . "' , '" . $enrol_date . "' , '" . $last_access . "');"."\r\n";


	$k++;
	
}
	$createsqlusers=str_replace("''", "NULL", $createsqlusers);
	$file2 = fopen("users.sql","w");
	fwrite($file2,$createsqlusers);
	
	$createsqlpeople=str_replace("''", "NULL", $createsqlpeople);
	$file = fopen("people.sql","w");
	fwrite($file,$createsqlpeople);	
	
		
	//Echo Results

    // echo strtolower($user_id);
    // echo '<br/>';
    // echo $salutation . "  ";
    // echo ucfirst(strtolower($first_name . "  "));
    // echo ucfirst(strtolower($last_name));
    // echo '<br/>';
    // echo strtolower($email);
    // echo '<br/>';
    // echo $primary_phone_number;
    // echo '<br/>';
    // echo $secondary_phone_number;
    // echo '<br/>';
    // if ($fax_number != NULL) {
        // echo $fax_number;
        // echo '<br/>';
    // }
    // echo $city;
    // echo '<br/>';
    // echo $prov;
    // echo '<br/>';
    // echo $postal_code;
    // echo '<br/>';
    // echo ucwords(strtolower($street_address));
    // echo '<br/>';
    // echo $preferred_contact_method;
    // echo '<br/>';
    
    // echo '<br/>';
?>
