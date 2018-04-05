<?php 
   $title = "city.php";
   $date = "2016-11-8";
   $filename = "city.php";
   $description = "This page acts as the city search page for our realtor website";
   ?>
<?php include 'header.php' ?>
<?php 
	global $conn;
    $error = "";
	print_r($_SESSION['city']);
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
		$city = 0;
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$city = $_POST['cities'];
		if(sumCheckBox($city) != 0)
		{
			$_SESSION['city'] = $city;
			//redirect("listing-search.php");
		}
		else
		{
			echo "<br/>Please Choose at least one city.";
		}
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <table class = "mainformtable">
   <tr  class = "formheader">
      <td  colspan = "5">Search a Listing</td>
   </tr>
	<tr>
      <td>
	  <?php
			$sql = "SELECT * FROM cities";
			$result = pg_query($conn, $sql);
			build_checkbox("cities" , $city, $result);
		?>
			</td>
		</tr>
	<tr>
		<td><input type="submit" class = "submitbtn" name="create" value="Choose City"/></td>
	</tr>
	</table>
</form>
<?php include 'footer.php' ?>