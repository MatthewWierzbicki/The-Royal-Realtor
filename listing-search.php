<?php 
   $title = "listing-search.php";
   $date = "2016-09-20";
   $filename = "listing-search.php";
   $description = "This page acts as the search page for our realtor website";
   ?>
<?php include 'header.php'; ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   <table class = "mainformtable">
   <tr>
      <td>
         <table class = "searchboxtable" >
            <tr  class = "formheader">
               <td  colspan = "5">Search a Listing</td>
            </tr>
            <tr>
               <th>Bedrooms</th>
               <th>Bathrooms</th>
               <th>Driveway</th>
               <th>Ownership Type</th>
               <th>Building Type</th>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "oneRoom"/>1 Bedroom</td>
               <td><input type = "checkbox" name = "search" value = "oneBath"/>1 Bathroom</td>
               <td><input type = "checkbox" name = "search" value = "oneCar"/>1 Car Driveway</td>
               <td><input type = "checkbox" name = "search" value = "forSale"/>For Sale</td>
               <td><input type = "checkbox" name = "search" value = "residential"/>Residential</td>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "twoRoom"/>2 Bedrooms</td>
               <td><input type = "checkbox" name = "search" value = "twoBath"/>2 Bathrooms</td>
               <td><input type = "checkbox" name = "search" value = "twoCar"/>2 Car Driveway</td>
               <td><input type = "checkbox" name = "search" value = "forRent"/>For Rent</td>
               <td><input type = "checkbox" name = "search" value = "recreational"/>Recreational</td>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "threeRoom"/>3 Bedrooms</td>
               <td><input type = "checkbox" name = "search" value = "threeBath"/>3 Bathrooms</td>
               <td><input type = "checkbox" name = "search" value = "oneCar"/>3 Car Driveway</td>
               <td><input type = "checkbox" name = "search" value = "forLease"/>For Lease</td>
               <td><input type = "checkbox" name = "search" value = "condos"/>Commercial</td>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "fourPlusRoom"/>4+ Bedrooms</td>
               <td><input type = "checkbox" name = "search" value = "fourPlusBath"/>4+ Bathrooms</td>
               <td><input type = "checkbox" name = "search" value = "oneCar"/>4 Car Driveway</td>
            </tr>
         </table>
         <table class = "searchboxtable">
            <tr>
               <th>View Type</th>
               <th>Add Ons</th>
               <th>House Type</th>
               <th colspan = "2" style = "text-align:center; padding-right:65px;">City</th>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "waterFront"/>Water Front</td>
               <td><input type = "checkbox" name = "search" value = "firePlace"/>Fireplace</td>
               <td><input type = "checkbox" name = "search" value = "sepHouse"/>Seperated House</td>
               <td style = "padding-right:10px;"><input type = "checkbox" name = "search" value = "whitby"/>Whitby</td>
			   <td style = "padding-left:5px;"><input type = "checkbox" name = "search" value = "uxbridge"/>Uxbridge</td>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "cityView"/>City View</td>
               <td><input type = "checkbox" name = "search" value = "pool"/>Pool</td>
               <td><input type = "checkbox" name = "search" value = "townHouse"/>Town House</td>
               <td style = "padding-right:10px;"><input type = "checkbox" name = "search" value = "oshawa"/>Oshawa</td>
			   <td style = "padding-left:5px;"><input type = "checkbox" name = "search" value = "bowmanville"/>Bowmanville</td>
            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "mountainView"/>Mountain View</td>
               <td><input type = "checkbox" name = "search" value = "ac"/>A/C</td>
               <td><input type = "checkbox" name = "search" value = "apartment"/>Apartment</td>
               <td style = "padding-right:5px;"><input type = "checkbox" name = "search" value = "ajax"/>Ajax</td>
			   <td style = "padding-left:5px;"><input type = "checkbox" name = "search" value = "markham"/>Markham</td>

            </tr>
            <tr>
               <td><input type = "checkbox" name = "search" value = "suburbanView"/>Suburban View</td>
               <td><input type = "checkbox" name = "search" value = "garage"/>Garage</td>
               <td><input type = "checkbox" name = "search" value = "fireplace"/>Bungalow</td>
               <td style = "padding-right:5px;"><input type = "checkbox" name = "search" value = "pickering"/>Pickering</td>
			   <td style = "padding-left:5px;"><input type = "checkbox" name = "search" value = "portPerry"/>Port Perry</td>
            </tr>
            <tr>
               <th>Price</th>
            </tr>
            <tr>
               <td>
                  <select style = "vertical-align:top;float:left;" name = "type">
                     <option value = "hundredThousand">$0 - $100,000</option>
                     <option value  = "twoFifty">$100,000 - $250,000</option>
                     <option value  = "fiveHundred">$250,000 - $500,000</option>
                     <option value  = "sevenFifty">500,000 - $750,000</option>
                     <option value  = "million">750,000 - 1,000,000</option>
                     <option value = "maxValue">1,000,000+</option>
                  </select>
               </td>
               <td colspan = "4">
                  <input type="submit" class = "submitbtn" value= "SEARCH" name= "btnsearch"/>
               </td>
            </tr>
         </table>
      </td>
	  </tr>
   </table>
</form>
<?php include 'footer.php' ?>