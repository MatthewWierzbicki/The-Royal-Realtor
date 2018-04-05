<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="css/webd3201.css"/>
      <!--
         Name: Nick Carpenter, Matthew Wierzbicki, Kyrene Hemington, Simon Stoll
         File: <?php echo $filename; ?>
         Date: <?php echo $date; ?>
         Description: <?php echo $description; 
		 					ob_start();
							require 'includes/db.php';
							require 'includes/constants.php';
						    require 'includes/functions.php';

							session_start();
							//$_SESSION['temp'] = "Fake session variable";
						?>			
         -->
      <title> <?php echo $title; ?> </title>
   </head>
   <body>
      <div id="container">
      <div id="header">
        <img src="images/logo.png" alt="logo" height="120" width="120"/>
		         <h1>Welcome to The Royal Realtor</h1> 
      </div>
      <div id="sites">
	    <ul class = "rightborder">
			<li class = "rightborder"><a href="index.php">Home</a></li>
			<li class = "rightborder"><a href="listing-create.php">Create a Listing</a></li>
			<li class = "rightborder"><a href="listing-city.php">Search for City</a></li>	
            <li class = "rightborder"><a href="listing-search.php">Search for Listing</a></li>	
			<li class = "rightborder"><a href="search-result.php">Search Results</a></li>	
            <li class = "rightborder"><a href="listing-display.php">Listing Display</a></li>	
			</ul>
			<ul class = "leftborder">
			<li class= "rightborder"> <a href="dashboard.php">Dashboard </a> </li>
			<li class= "rightborder"> <a href="admin.php">Admin Page </a> </li>
			<li class = "rightborder"><a href="welcome.php">Welcome</a></li>
            <li class= "rightborder"><a href="register.php">Register</a></li>
			<li > <a href="login.php">Login </a> </li>
			<li class = "leftborder"><a href="contact_us.php">Contact Us</a></li>
			</ul>			
      </div>
 
      <div id="content-container">
	  
      <div id="content">
	  <?php
	  if (isset($_SESSION['message']))
	{
		echo '<p class="center"><b>' . $_SESSION['message'] .'</b></p>';
		$_SESSION['message'] = "";
		unset($_SESSION['message']);
	}	
	?>