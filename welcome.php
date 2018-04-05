<?php 
   $title = "welcome.php";
   $date = "2016-09-20";
   $filename = "welcome.php";
   $description = "This page acts as the welcome page for our real estate website";
   include 'header.php';

?>
<?php 
if ($_SESSION['user']['user_type']==AGENT)
{
	$error = "Sorry! You can't view this page.";
	$_SESSION['message'] = $error;
	redirect("index.php");
}
if(!isset($_SESSION['user']))
{
	 redirect("login.php");
}else{
	echo '<h1 class="center"> Welcome Page</h1>';
	$welcomeMsg =  "Welcome Back 	" . $_SESSION['user']['first_name'] . " ". $_SESSION['user']['last_name']  . "! Our records show you are one of our " . user_type($_SESSION['user']['user_type']) ."s and your registed email address is: " . $_SESSION['user']['email_address'] . "  and the last time you logged in was: ". $_SESSION['user']['last_access'] . " <br/>";
	echo '<p class="center"><b>' . $welcomeMsg .'</b></p>';
}
?>
<?php include 'footer.php'; ?>