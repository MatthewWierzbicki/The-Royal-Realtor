<?php
   include "names.php";
   include "header.php";
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
       'm',
       'e',
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
   $users['user_id']['first_name']['last_name']['primary_phone_number']['secondary_phone_number']['fax_number']['city']['postal_code']['street_address']['street_address_2']['user_type']['email']['password']['enrol_date']['last_access'] = array();
   
   //RandomPick
   function randomPick($array)
   {
       $min  = 0;
       $max  = count($array);
       $name = $array[rand($min, $max - 1)];
       return $name;
   
   }
   while ($k < 100)
   {
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
       if (randomPick($fax) == "Y"){
           $fax_number = substr($primary_phone_number, 0, 3);
           $fax_number = $fax_number . rand(200, 999);
           for ($j = 0; $j < 4; $j++) {
               $fax_number = $fax_number . rand(0, 9);
           }
       }
       //USERID Creation
       $user_id = $last_name . substr($first_name, 0, 1);
   	
   	//User_type
   	$user_type =  randomPick($user_types);
   	
   	//Fix Letters
   
       $user_id = strtolower($user_id);
       $first_name = ucfirst(strtolower($first_name . "  "));
       $last_name = ucfirst(strtolower($last_name));
       $email = strtolower($email);
   	$street_address = ucwords(strtolower($street_address));
   	$user_id=str_replace("'", "','", $user_id);
   	$email=str_replace("'", "','", $email);
   	$street_address=str_replace("'", "','", $street_address);
   	$last_name=str_replace("'", "','", $last_name);
   	
   	
   	//Create SQL Files
   	
   	$createsqlpeople .="INSERT INTO people(user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method)". "\r\n" . "VALUES('" . $user_id . "' , '" . $salutation . "' , '" . $first_name . "' , '" . $last_name . "' , '" . $street_address . "' , '" . $street_address_2 . "' , '" . $city . "' , '" . $prov . "' , '" . $postal_code . "' , '" . $primary_phone_number . "' , '" . $secondary_phone_number . "' , '" . $fax_number . "' , '" . $preferred_contact_method . "');"."\r\n";
   	
   	$createsqlusers .="INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access)" . "\r\n" . "VALUES('" . $user_id . "' , md5('" . $password. "') , '" . $user_type . "' , '" . $email . "' , '" . $enrol_date . "' , '" . $last_access . "');"."\r\n";
   
   	//inputting info into an array
   	$users['user_id'][$k]=$user_id;
   	$users['first_name'][$k]=$first_name;
   	$users['last_name'][$k]=$last_name;
   	$users['primary_phone_number'][$k]=$primary_phone_number;
   	$users['secondary_phone_number'][$k]=$secondary_phone_number;
   	$users['fax_number'][$k]=$fax_number;
   	$users['city'][$k]=$city;
   	$users['postal_code'][$k]=$postal_code;
   	$users['street_address'][$k]=$street_address;
   	$users['street_address_2'][$k]=$street_address_2;
   	$users['user_type'][$k]=$user_type;
   	$users['email'][$k]=$email;
   	$users['password'][$k]=$password;
   	$users['enrol_date'][$k]=$enrol_date;
   	$users['last_access'][$k]=$last_access;
   	
   	//Adding to the loop
   	$k++;
   }
   	//Write User File
   	$createsqlusers=str_replace("','", "NULL", $createsqlusers);
   	$file2 = fopen("users.sql","w");
   	fwrite($file2,$createsqlusers);
   	
   	//Write People File
   	$createsqlpeople=str_replace("','", "NULL", $createsqlpeople);
   	$file = fopen("people.sql","w");
   	fwrite($file,$createsqlpeople);
   	
   	echo "<h1 style='text-align:center;'> Finished Writing Files!</h1>";
   	//Display!
   	
   	
   	displayResults($users);
   
   function displayResults($array)
   {
   	?>
<table class="mainformtable" >
   <tr style="border-style:solid;">
      <th  style="border-style:solid;">USERID</th>
      <th  style="border-style:solid;">First Name</th>
      <th style="border-style:solid;">Last Name</th>
      <th  style="border-style:solid;">Phone Number #1</th>
      <th style="border-style:solid;">Phone Number #2</th>
      <th  style="border-style:solid;">Fax Number</th>
      <th  style="border-style:solid;">City</th>
      <th style="border-style:solid;">Postal Code</th>
      <th style="border-style:solid;">Street Address</th>
      <th  style="border-style:solid;">2</th>
      <th style="border-style:solid;">User Type </th>
      <th  style="border-style:solid;">E-mail</th>
      <th  style="border-style:solid;">Password</th>
      <th  style="border-style:solid;">Enrol Date</th>
      <th style="border-style:solid;">Last_access</th>
   </tr>
   <?php
      for ($i=0; $i <= count($array['first_name'])-1; $i++)
      {
      	echo "<tr>";
      	echo "<td> &nbsp;"; 
      	echo $array['user_id'][$i]."</td>";
      	echo "<td > &nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['first_name'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['last_name'][$i]."</td>";
      	echo "<td  style='text-align:center;'>"; 
      	echo display_phone_number($array['primary_phone_number'][$i])."</td>";
      	echo "<td  style='text-align:center;'>"; 
      	echo display_phone_number($array['secondary_phone_number'][$i])."</td>";
      	echo "<td  style='text-align:center;'>"; 
      	if ($array['fax_number'][$i] == NULL)
      	{
      			echo "No Fax #";
      	}
      	else	
      	{
      		echo display_phone_number($array['fax_number'][$i])."</td>";
      	}
      	echo "<td style='text-align:center;' >"; 
      	echo $array['city'][$i]."</td>&nbsp;&nbsp;&nbsp;&nbsp;";
      	echo "<td style='text-align:center;'>&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['postal_code'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['street_address'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['street_address_2'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	switch ($array['user_type'][$i])
      	{
      		case 'I':
      		echo 'Incomplete_Client';
      		break;
      		case 'P':
      		echo 'Pending_Agent';
      		break;
      		case 'C':
      		echo 'Client';
      		break;
      		case 'G':
      		echo 'Agent';
      		break;
      	}
      	echo "</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['email'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['password'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['enrol_date'][$i]."</td>";
      	echo "<td >&nbsp;&nbsp;&nbsp;&nbsp;"; 
      	echo $array['last_access'][$i]."</td></tr>";
      }
      ?>
</table>
<br/>
<br/>
<br/>
<br/>
<table class="mainformtable">
   <tr>
      <th>People SQL File</th>
   </tr>
   <tr>
      <td>
         <?php
            $file = fopen("people.sql","r");
            $pageText = fread($file, 25000);
			echo nl2br($pageText);
            
            ?>
      </td>
   </tr>
</table>
<br/>
<br/>
<br/>
<br/>
<table class="mainformtable">
   <tr>
      <th>Users SQL File</th>
   </tr>
   <tr>
      <td>
         <?php
            $file = fopen("users.sql","r");
			   $pageText = fread($file, 25000);
			echo nl2br($pageText);
            
            ?>
      </td>
   </tr>
</table>
<?php
   }
   	include "footer.php";
   ?>