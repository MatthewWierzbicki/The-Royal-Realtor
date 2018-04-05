<?php 
   $title = "Listing Display";
   $date = "2016-02-25";
   $filename = "listing-display.php";
   $banner = "Welcome to The Royal Realtor";
   $description = "This is the specific listing page for our my web development course(WEBD-2201-06).";
   include 'header.php';
   ?>
<table class = "mainformtable" style = "padding:5px;width: 65%;">
   <tr class = "formheader">
      <td colspan = "4">
         <?php
            echo LISTING_TITLE;
            ?>
      </td>
   </tr>
   <tr>
      <td class="center" colspan ="4">
         <a href="images/house2.jpg"><img  src = "images/house2.jpg" alt = "house2" height = "90px" width = "150px"/></a>
         <a href="images/house3.jpg"><img  src = "images/house3.jpg" alt = "house3" height = "90px" width = "150px"/></a>
         <a href="images/house4.jpg"><img  src = "images/house4.jpg" alt = "house4" height = "90px" width = "150px"/></a>
         <a href="images/house5.jpg"><img  src = "images/house5.jpg" alt = "house5" height = "90px" width = "150px"/></a>
         <a href="images/house6.jpg"><img  src = "images/house6.jpg" alt = "house6" height = "90px" width = "150px"/></a>
         <a href="images/house7.jpg"><img  src = "images/house7.jpg" alt = "house7" height = "90px" width = "150px"/></a>
      </td>
   </tr>
	<tr>
		<td>
		<?php
			echo "<h3> Price: " . PRICE . "</h3>";
		?>
		</td>
		<td colspan = "2" align = "left">
		<?php
			echo "<b>" . LISTING_ADDRESS . ", " . POSTAL_CODE . "</b>";
		?>
		</td>
	</tr>
   <tr >
      <td style="padding-right:15px;vertical-align:top;" >
         <img src = "images/house1.jpg" alt = "house" height = "180px" width = "320"/>
		 </td>
      <td colspan = "3" >
         <?php
            echo "<p>" . LISTING_DESCRIPTION . "</p>";
            ?>
	  </td>
   </tr>
   <tr>
      <td rowspan = "5" align = "center" style="vertical-align:top;">
         <img src = "images/realtor.jpg" alt = "Realtor" height = "50%" width = "55%"/>
      </td>
   </tr>
   <tr>
   	<td >
   	  <h3> Details: </h3>
	</td >
   </tr>
   <tr>
      <td class = "dropdownspace">
         <?php
            echo "<b>Number of Bedrooms:</b><br/>";
            echo BEDROOMS . " Bedrooms";
            ?>
      </td>
      <td class = "dropdownspace">
         <?php
            echo "<b>Number of Bathrooms:</b><br/>";
            echo BATHROOMS. " Bathrooms";
            ?>
      </td>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of Driveway:</b><br/>";
            echo DRIVEWAY. " Driveways";
            ?>
      </td>
   </tr>
   <tr>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of Ownership:</b><br/>";
            echo OWNERSHIP;
            ?>
      </td>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of Building:</b><br/>";
            echo BUILDING;
            ?>
      </td>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of View:</b><br/>";
            echo VIEW;
            ?>
      </td>
   </tr>
   <tr>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of House:</b><br/>";
            echo HOUSE;
            ?>
      </td>
      <td class = "dropdownspace">
         <?php
            echo "<b>Type of City:</b><br/>";
            echo CITY;
            ?>
      </td>
      <td class = "dropdownspace" colspan = "2">
         <?php
            echo "<b>Add Ons:</b><br/>";
            echo ADD;
            ?>
			</td>
   </tr>
   <tr>
      <td align = "center">
         <?php
            echo "<b>" . REALTOR_NAME . "</b> <br/>";
            echo REALTOR_EMAIL;
            echo "<br/>";
            echo REALTOR_PHONE;
            ?>
      </td>
   </tr>
</table>
<?php
   include 'footer.php';
   ?>