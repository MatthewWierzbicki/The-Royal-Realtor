<?php 
  $title = "Create Listing";
  $date ="2016-09-20";
  $filename = "listingcreate.php";
  $description = "This is the create listing page for our my web development course(WEBD-2201-06).";
  include 'header.php';  
  
if(!isset($_SESSION['user']))
{
	redirect("login.php");
}
$error = "";
if ($_SESSION['user']['user_type']!="G" && $_SESSION['user']['user_type']!="A" )
{
	$error = "Sorry! Only agents can create listings.";
	$_SESSION['message'] = $error;
	redirect("index.php");
}
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$listing_title = "";
	$postal_code = "";
	$listing_description = "";
	$address = "";
	$price = "";
	$province = "";
	$bedrooms = 0;
	$bathrooms = 0;
	$driveway = 0;
	$ownership_type = 0;
	$building_type = 0;
	$view_type = 0;
	$house_type = 0;
	$city = 0;
	$addons = 0;
}
else if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$listing_title = trim($_POST['listing_title']);
	$postal_code = trim($_POST['postal_code']);
	$listing_description = trim($_POST['listing_description']);
	$address = trim($_POST['address']);
	$price = trim($_POST['price']);
	$province = $_POST['province_name'];
	$bedrooms = $_POST['bedrooms'];
	$bathrooms = $_POST['bathrooms'];
	$driveway = $_POST['driveway'];
	$ownership_type = $_POST['ownership_type'];
	$building_type = $_POST['building_type'];
	$view_type = $_POST['view_type'];
	$house_type = $_POST['house_type'];
	$city = $_POST['city'];
	$addons = $_POST['addons'];

	if (!isset($listing_title) || $listing_title == "" || strlen($listing_title) > MAX_LISTING_TITLE)
	{
		$error .= "<h4 class= 'center'>Please enter a listing title with under 100 characters into the title textbox!</h4>";
	}
	if (!isset($listing_description) || $listing_description == "" || strlen($listing_description) > MAX_LISTING_DESCRIPTION)
	{
		$error .= "<h4 class= 'center'>Please enter a listing Description with under 1000 characters into the description textbox!</h4>";
	}
	if (!isset($address) || $address == "" || strlen($address) > MAX_LISTING_ADDRESS)
	{
		$error .= "<h4 class= 'center'>Please enter a address with under 50 characters into the address textbox! </h4>";
	}
	if (!isset($postal_code) || $postal_code == "" || is_valid_postal_code($postal_code) == false)
	{
		$error .= "<h4 class= 'center'>Please enter a valid postal code </h4>";
	}
	if (!isset($price) || $price == "" || !is_numeric($price))
	{
		$error .= "<h4 class= 'center'>Please enter a numeric price value into the price textbox!</h4>";
	}
	if(isset($_REQUEST['bedrooms']) && $_REQUEST['bedrooms'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose the amount of bedrooms the listing has!</h4>";
	}
	if(isset($_REQUEST['bathrooms']) && $_REQUEST['bathrooms'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose the amount of bathrooms the listing has!</h4>";
	}
	if(isset($_REQUEST['driveway']) && $_REQUEST['driveway'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose the type of driveway the listing has!</h4>";
	}
	if(isset($_REQUEST['ownership_type']) && $_REQUEST['ownership_type'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose an ownership type!</h4>";
	}
	if(isset($_REQUEST['building_type']) && $_REQUEST['building_type'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose a building type!</h4>";
	}
	if(isset($_REQUEST['view_type']) && $_REQUEST['view_type'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose a view type!</h4>";
	}
	if(isset($_REQUEST['house_type']) && $_REQUEST['house_type'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose a house type!</h4>";
	}
	if(isset($_REQUEST['city']) && $_REQUEST['city'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose a city type!</h4>";
	}
	if(isset($_REQUEST['addons']) && $_REQUEST['addons'] == '0') 
	{ 
		$error .= "<h4 class= 'center'>Please choose an addon type!</h4>";
	}
	if($error == "")
	{
		$postal_code = str_replace(' ', '', $postal_code);
		pg_execute($conn, "new_listing", array($_SESSION['user']['user_id'], 'o', $price, $listing_title, $listing_description, $address, strtoupper($postal_code), 0, $city, $bedrooms, $bathrooms, $addons, $building_type, $driveway, $house_type, $ownership_type, $province, $view_type));
		$success = "You have successfully created a listing!";
		$_SESSION['message'] = $success;
		redirect("dashboard.php");
	}
	else
	{
		echo $error;
	}

}
?>
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
<table id= "createform">
	<tr class = "formheader">
		<td colspan = "2">Create a Listing</td>
	</tr>
	<tr>
		<td colspan = "2">
			<p><b>Title of Listing:</b> <input type="text" class = "longtextbox" name="listing_title" value = "<?php echo $listing_title ?>" /></p>
		</td>
	</tr>
	<tr>
		<td colspan = "2">
			<b>Description: </b><textarea rows="4" cols="1" class = "bigtextbox" name="listing_description"><?php echo $listing_description ?></textarea>
		</td>
	</tr>
	<tr>
		<td colspan = "2">
			<b>Address: </b><input type="text" class = "longtextbox" name="address" value = "<?php echo $address ?>"/>
		</td>
	</tr>
	<tr>
		<td class = "dropdownspace">
			<b>Bedrooms:</b>
			<?php
				$sql = "SELECT * FROM bedrooms";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "bedrooms" , $bedrooms);
			?>
		</td>
		<td class = "dropdownspace">
			<b>Bathrooms:</b>
			<?php
				$sql = "SELECT * FROM bathrooms";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "bathrooms" , $bathrooms);
			?>
		</td>
	</tr>
	<tr>
		<td class = "dropdownspace">
			<b>Type of Driveway:</b>
			<?php
				$sql = "SELECT * FROM driveway";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "driveway", $driveway);
			?>
		</td>
		<td class = "dropdownspace">
			<b>Ownership Type:</b>
			<?php
				$sql = "SELECT * FROM ownership_type";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "ownership_type", $ownership_type);
			?>
		</td>
	</tr>
	<tr>
		<td class = "dropdownspace">
			<b>Building Type:</b>	
			<?php
				$sql = "SELECT * FROM building_type";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "building_type", $building_type);
			?>
		</td>
		<td class = "dropdownspace">
			<b>View Type:</b>
			<?php
				$sql = "SELECT * FROM view_type";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "view_type", $view_type);
			?>
		</td>
	</tr>
	<tr>
		<td class = "dropdownspace">
			<b>House Type:</b>
			<?php
				$sql = "SELECT * FROM house_type";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "house_type", $house_type);
			?>
		</td>
		<td class = "dropdownspace">
			<b>City:</b>
			<?php
				$sql = "SELECT * FROM cities";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "city", $city);
			?>
		</td>
	</tr>
	<tr>
		<td class = "dropdownspace">
			<b>Add ons:</b>
			<?php
				$sql = "SELECT * FROM addons";
				$connection = db_connect($conn);
				$result = pg_query($connection, $sql);
				build_dropdown($result, "addons", $addons);
			?>
		</td>
		<td class = "dropdownspace">
			<b>Provinces</b>
			<?php
				$sql = "SELECT province_name FROM provinces";
				$connection = db_connect();
				$result = pg_query($connection, $sql);
				$length = pg_num_rows($result);
				build_simple_dropdown($result, $length, "province_name", $province);
			?>
		</td>
	</tr>
	<tr>
	<td>
		<b>Postal Code: </b>
		<input class ="right" type="text" name="postal_code" value = "<?php echo $postal_code ?>"/>
	</td>
	<td>
		<b>Price:</b>
		<input class ="right" type="text" name="price" value = "<?php echo $price ?>"/>
	</td>
	</tr>
	<tr>
		<td colspan = "2">
			<br/>
			<input type="submit" class = "submitbtn" name="create" value="Create Listing"/>
		</td>
	</tr>
</table>
</form>
		<?php
		$table_name = "building_type";
		$value = 1;
		get_property($table_name, $value);
		?>


<?php
include 'footer.php';
?>