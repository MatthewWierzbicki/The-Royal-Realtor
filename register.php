<?php
   $title = "Register";
   $date = "2016-09-26";
   $filename = "register.php";
   $banner = "Welcome to The Royal Realtor";
   $description = "This page acts as the register page for our realtor website.\n
   				It allows anyone to register a new user account on the website which gets stored in the DB.";
   include "header.php";
   ?>
<?php
   global $conn;
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "GET")
   {
   	$newUser = "";
   	$newPassword = "";
   	$confirmNewPassword = "";
   	$newEmail = "";
   	$newFirstName = "";
   	$newLastName = "";
   	$addressOne = "";
   	$addressTwo = "";
   	$postalCode = "";
   	$newPrimaryPhone = "";
   	$newSecondPhone = "";
	$provinces = "";
	$city = "";
	$salutations = "";
	$preferred_contact_method = EMAIL_CONTACT;
   	$newFax = "";
   	$error = "";
   }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   	$newUser = trim($_POST['newUser']);
   	$newPassword = trim($_POST['newPass']);
   	$confirmNewPassword = trim($_POST['confirmPass']);
   	$newEmail = trim($_POST['newEmail']);
   	$newFirstName = trim($_POST['firstName']);
   	$newLastName = trim($_POST['lastName']);
   	$addressOne = trim($_POST['addressOne']);
   	$addressTwo = trim($_POST['addressTwo']);
   	$postalCode = trim($_POST['postalCode']);
   	$newPrimaryPhone = trim($_POST['primPhone']);
   	$newSecondPhone = trim($_POST['secondPhone']);
   	$newFax = trim($_POST['faxNumber']);
   	$provinces = trim($_POST['province_name']);
	$city = trim($_POST['city_name']);
	$salutations = trim($_POST['salutation_name']);
	$preferred_contact_method = trim($_POST['preferred_contact_method_name']);

   	if (!isset ($newUser) || $newUser == "")
   	{
   		$error .= "Please enter a username. <br/>";
   	}
	elseif(strlen($newUser) < MIN_USERNAME)
	{
	  $error .= "Ussername must be more then 6 characters!<br/>";
	}
   	elseif (strlen($newUser) > MAX_USERNAME)
   	{
   		$error .= "Ussername must be less then 20 characters!<br/>";
   	}
   	
   	if (is_existing_user($newUser))
   	{
   		$error .= "The username entered is not available.<br/>";
   	}

   	if(!isset($newPassword) || $newPassword == "")
   	{
   		$error .= "Password can't be blank!<br/>";
   	}
   	elseif (strlen($newPassword) > MAX_PASSWORD)
   	{
   		$error .= "Ussername must be less then 16 characters!<br/>";
   	
	}elseif (strlen($newPassword) <= MIN_PASSWORD)
	{
		$error .= "Password must be greater then 8 characters!<br/>";
	}elseif(!isset($confirmNewPassword) || $confirmNewPassword == "" || $confirmNewPassword != $newPassword)
   	{
   		$error .= "Passwords don't match!<br/>";
   	}
   	if (!isset($newEmail) || $newEmail == "")
   	{
   		$error .= "Please enter a Email address<br/>";
   	}
	elseif (!filter_var($newEmail, FILTER_VALIDATE_EMAIL) === True)
   	{
   		$error .= "Email is not valid<br/>";
   	}elseif (strlen($newEmail) > MAX_EMAIL)
   	{
   		$error .= "email must be less then 256 characters!<br/>";
   	} 	
   	
   	if(!isset($newFirstName) || $newFirstName == "")
   	{
   		$error .= "First Name can't be blank!<br/>";
   	}elseif (strlen($newFirstName) > MAX_FIRST_NAME)
   	{
   		$error .= "First name must be less then 25 characters!<br/>";
   	}
   	if(!isset($newLastName) || $newLastName == "")
   	{
   		$error .= "Last Name can't be blank!<br/>";
   	}elseif (strlen($newLastName) > MAX_LAST_NAME)
   	{
   		$error .= "Last Name must be less then 50 characters!<br/>";
   	}
   	if(!isset($addressOne) || $addressOne == "")
   	{
   		$error .= "Address can't be blank!<br/>";
   	}elseif (strlen($addressOne) > STREET_ADDRESS_1)
   	{
   		$error .= "Street Address 1 must be less then 75 characters!<br/>";
   	}elseif(strlen($addressTwo) > STREET_ADDRESS_2)
   	{
   		$error .= "Street Address 2 must be less then 75 characters!<br/>";	 
   	}
   	if (is_valid_postal_code($postalCode) ==false)
   	{
		if (isset($postalCode) && $postalCode == "")
		{
			$error .= "Postal code can't be blank!<br/>";
		}
		else
		{
			$error .= "Please enter a valid postal code!";
		}
				$postal_code = str_replace(' ', '', $postal_code);
   	}
    if(!isset($_REQUEST['preferred_contact_method_name']) && $_REQUEST['preferred_contact_method_name'] != '0')
	{
		$error .= "Please select a preferred contact method!<br/>";
	}   
	if(!isset($_REQUEST['province_name']) && $_REQUEST['province_name'] != '0')
	{
		$error .= "Please select a Province!<br/>";
	}
	if(isset($city) && $city == "")
	{
		$error .= "City can't be blank!<br/>";
	}
	elseif(strlen($city) > CITY)
	{
		$error .= "City has to be less then 75 characters!<br/>";
	}
   	if (is_valid_phone_number($newPrimaryPhone) != "VALID")
   	{
   		$error .=  "Primary phone" .is_valid_phone_number($newPrimaryPhone)."<br/>";
   	}
   	if (is_valid_phone_number($newSecondPhone) != "VALID")
   	{
   		if(!isset($newSecondPhone))
   		{
   			$error .= "Secondary phone" . is_valid_phone_number($newSecondPhone);
   		}
   	}
   	if (is_valid_phone_number($newFax) != "VALID")
   	{
   		if(!isset($newFax))
   		{
   			$error .= "Fax" . is_valid_phone_number($newFax);
   		}
   	}   	
   	if ($error == "")
   	{		
			$time = date("Y-m-d", time());
			pg_execute($conn, "new_user", array($newUser,hash('md5',$newPassword),CLIENT,$newEmail,$time,$time));
			pg_execute($conn, "new_people", array($newUser,$salutations,$newFirstName,$newLastName,$addressOne,$addressTwo,$city,$provinces,$postalCode,$newPrimaryPhone,$newSecondPhone, $newFax,$preferred_contact_method));
			$message = "You have successfully registered!";
			$_SESSION['message'] = $error;
			redirect("index.php");
   	}
   	if (!isset($error) || $error != "")
   	{
   		echo '<p class="center"><b>'.$error.'</b></p>';
   		$password = "";
   	}
}
   ?><form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
   <table class = "registertable">
      <tr>
         <th colspan = "2" class = "formheader">Registration </th>
      </tr>
      <tr>
         <td>
            <p><b>Username</b><br/><input type="text" class = "longtextboxregister" name="newUser" size="20" value="<?php echo $newUser; ?>"/></p>
         </td>
         <td>
            <p><b>Email</b><br/><input type="text" class = "longtextboxregister" name="newEmail" size="20" value="<?php echo $newEmail; ?>"/></p>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>Password</b><br/><input type="password" class = "longtextboxregister" name="newPass" size="20" /></p>
         </td>
         <td>
            <p><b>Confirm Password</b><br/><input type="password" class = "longtextboxregister" name="confirmPass" size="20" /></p>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>First Name</b><br/><input type="text" class = "longtextboxregister" name="firstName" size="20" value="<?php echo $newFirstName; ?>"/></p>
         </td>
         <td>
            <p><b>Last Name</b><br/><input type="text" class = "longtextboxregister" name="lastName" size="20" value="<?php echo $newLastName; ?>" /></p>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>Address line 1</b><br/><input type="text" class = "longtextboxregister" name="addressOne" size="20" value="<?php echo $addressOne; ?>"/></p>
         </td>
         <td>
            <p><b>Address line 2</b><br/><input type="text" class = "longtextboxregister" name="addressTwo" size="20" value="<?php echo $addressTwo; ?>"/></p>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>Postal Code</b><br/><input type="text" class = "longtextboxregister" name="postalCode" size="20" value="<?php echo $postalCode; ?>"/></p>
         </td>
         <td  class="left" >
            <b >Preferred Contact Method<br/></b>
            <?php
               $sql = "SELECT * FROM preferred_contact_method";
               $result = pg_query($conn, $sql);
               
               build_radio($result,"preferred_contact_method_name",$preferred_contact_method);
               echo "<br/>";
               
               ?>
            <b>Province</b>			 
            <?php
               $sql = "SELECT province_name FROM provinces";
               $result = pg_query($conn, $sql);
               build_simple_dropdown($result, pg_num_rows($result), "province_name", $provinces);
               echo "<br/>";
               echo "<br/>";
               
               ?> 
            <b>Salutation</b>
            <?php
               $sql = "SELECT salutation_name FROM salutations";
               $result = pg_query($conn, $sql);
               build_simple_dropdown($result, pg_num_rows($result), "salutation_name",  $salutations);
               ?>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>Primary Phone Number</b><br/><input type="text" class = "longtextboxregister" name="primPhone" size="20" value="<?php echo $newPrimaryPhone; ?>"/></p>
         </td>
         <td>
            <p><b>Secondary Phone Number</b><br/><input type="text" class = "longtextboxregister" name="secondPhone" size="20" value="<?php echo $newSecondPhone; ?>"/></p>
         </td>
      </tr>
      <tr>
         <td>
            <p><b>Fax Number</b><br/><input type="text" class = "longtextboxregister" name="faxNumber" size="20" value="<?php echo $newFax; ?>"/></p>
         </td>
         <td>
            <p><b>City</b><br/><input type="text" class = "longtextboxregister" name="city_name" size="20" value="<?php echo $city; ?>"/></p>
         </td>
      </tr>
      <tr>
         <td colspan = "2" style = "padding-right:45%;">
            <input type="submit" class = "submitbtn" value = "Register" />
         </td>
      </tr>
   </table>
</form>
<?php
   include 'footer.php';
   ?>