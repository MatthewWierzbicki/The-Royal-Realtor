<?php
   $title = "Login";
   $date = "2016-09-21";
   $filename = "login.php";
   $banner = "Welcome to The Royal Realtor";
   $description = "This page acts as the login page for our realtor website.\n
   				It allows users to login to either a standard user account or an admin account with additional privilleges";
   include "header.php";
   global $conn;
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "GET")
   {
	   
   	$username = "";
   	$password = "";
   	$error = "";
   	$welcomeMsg = "";
   }
   else if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   	$username = trim($_POST['username']);
   	$password = trim($_POST['password']);
   	if (!isset($username) || $username == "")
   	{
   		$error .= "Username can't be blank!<br/>";
   	}
   	if (!isset($password) || $password == "")
   	{
   		$error .= "Password can't be blank!";
   	}
    $password= hash("md5", $password);
   	$result = pg_execute($conn, "login_query",array($username, $password));

   	$records = pg_num_rows($result);
   	
   	 if ($error == "")
   	{
   		if($records)
   		{	
				session_unset($_SESSION);
				$user = pg_fetch_assoc($result, 0);
				$_SESSION['user'] = $user;
				setcookie("user", $username, time() + COOKIE_EXPIRY);
				pg_execute($conn, "update_last_access", array(date('Y-m-d', time()),$username));
			if($_SESSION['user']['user_type'] == "A")
			{
   				redirect("admin.php");
			}
			elseif($_SESSION['user']['user_type'] == "C")
			{	
				redirect("welcome.php");
			}
			elseif($_SESSION['user']['user_type'] == "P")
			{
				session_unset($_SESSION);
				$error .= "Your agent application is still pending (". $username . ")!";
			}
			elseif($_SESSION['user']['user_type'] == "D")
			{
				session_unset($_SESSION);
				$error .= "This user account(". $username . ") has been suspended!";
			}
			elseif($_SESSION['user']['user_type'] == "G")
			{
				redirect("dashboard.php");
			}
			elseif($_SESSION['user']['user_type'] == "I")
			{
				session_unset($_SESSION);
				$error .= "This user account(". $username . ") is incomplete, please contact one of our admins to get setup! <a href = 'contact_us.php'>Contact Us</a>";
			}
   		}
		else
		{
	
			$error = "Either the username or password entered did not match the one on file in our database";
		}
   	}
   	
   	
   	if (!isset($error) || $error != "")
   	{
   		echo '<p class="center"><b>'.$error.'</b></p>';
   
   		
   		$password = "";
   	}
   }
   ?>
   
<table class ="mainformtable" cellspacing="5px;">
   <tr>
      <th class ="formheader"> Please Login </th>
   </tr>
   <tr>
      <td>
         <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
            <table border="0" cellspacing="5px;">
               <tr>
                  <td colspan="2">
                     <p>Enter your user ID and Password to login to your account </p>
                     <b>Login ID <input class="longtextbox" type="text" name="username" value="<?php echo $username; ?>"/></b>
                     <b>Password <input class="longtextbox" type="password" name="password" value="<?php echo $password; ?>" /> </b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input id="left" type="submit" class = "submitbtn" name="create" value="Login"/>
                  </td>
                  <td>
					<input type="reset" class="submitbtn" value="Reset"/>
                  </td>
               </tr>
            </table>
         </form>
      </td>
   </tr>
</table>
<?php include 'footer.php' ?>