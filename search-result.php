<?php 
   $title = "search-result.php";
   $date = "2016-09-20";
   $filename = "search-result.php";
   $description = "This page acts as the search result page for out real estate website";
   ?>
<?php include 'header.php' ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<table class = "resulttable" >
   <tr class = "formheader">
      <td colspan = "3" ><?php echo LISTING_TITLE?></td>
   </tr>
   <tr>
      <td> <?php echo "<b>". "Price: " . PRICE . "</b>"?> </td>
      <td colspan = "3" class="left"> <?php echo "<b>" . LISTING_ADDRESS. "</b>"?></td>
	  <td class="right">
         <?php echo "<b>" . POSTAL_CODE . "</b>"?>
      </td>
   </tr>
   <tr>
      <td style = "vertical-align:top">
         <img src = "images/house1.jpg"  alt = "house" height = "180px" width = "260px"/>
      </td>
      <td style="vertical-align:top;"> <?php echo "<p>" . LISTING_DESCRIPTION . "</p>"?>
         <table>
            <tr>
               <th> Bedrooms: </th>
               <th> Bathrooms: </th>
               <th> House-type: </th>
               <th> Sale-Type: </th>
            </tr>
            <tr>
               <td class="center"> <?php echo "<b>" . BEDROOMS . "</b>"?> </td>
               <td class="center"> <?php echo "<b>" . BATHROOMS . "</b>"?> </td>
               <td class="center"><?php echo "<b>" . BUILDING . "</b>"?> </td>
               <td class="center"> <?php echo "<b>" . OWNERSHIP . "</b>"?></td>
            </tr>
         </table>
         <b><input  type="submit" class = "submitbtn" value= "View Listing..." name= "btnsearch"/></b>
      </td>
   </tr>
</table>
<table class = "resulttable" >
   <tr class = "formheader">
      <td colspan = "3" ><?php echo LISTING_TITLE?></td>
   </tr>
   <tr>
      <td> <?php echo "<b>". "Price: " . PRICE . "</b>"?> </td>
      <td colspan = "3" class="left"> <?php echo "<b>" . LISTING_ADDRESS. "</b>"?></td>
	  <td class="right">
         <?php echo "<b>" . POSTAL_CODE . "</b>"?>
      </td>
   </tr>
   <tr>
      <td style = "vertical-align:top">
         <img src = "images/house1.jpg"  alt = "house" height = "180px" width = "260px"/>
      </td>
      <td style="vertical-align:top;"> <?php echo "<p>" . LISTING_DESCRIPTION . "</p>"?>
         <table>
            <tr>
               <th> Bedrooms: </th>
               <th> Bathrooms: </th>
               <th> House-type: </th>
               <th> Sale-Type: </th>
            </tr>
            <tr>
               <td class="center"> <?php echo "<b>" . BEDROOMS . "</b>"?> </td>
               <td class="center"> <?php echo "<b>" . BATHROOMS . "</b>"?> </td>
               <td class="center"><?php echo "<b>" . BUILDING . "</b>"?> </td>
               <td class="center"> <?php echo "<b>" . OWNERSHIP . "</b>"?></td>
            </tr>
         </table>
         <b><input  type="submit" class = "submitbtn" value= "View Listing..." name= "btnsearch"/></b>
      </td>
   </tr>
</table>
</form>

<?php
   include 'footer.php';
   ?>