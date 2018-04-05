<?php
$conn = db_connect();
$stmt1 = pg_prepare($conn, "login_query" , "SELECT * FROM users, people WHERE users.user_id = people.user_id AND users.user_id = $1 AND users.password = $2");
$stmt2 = pg_prepare($conn, "update_last_access" ,"UPDATE users Set last_access = $1 WHERE user_id = $2");
$stmt3 = pg_prepare($conn, "is_existing_user", "SELECT * FROM users WHERE user_id = $1");
$stmt4 = pg_prepare($conn, "new_user", "INSERT INTO users (user_id, password, user_type, email_address, enrol_date, last_access) VALUES($1,$2,$3,$4,$5,$6)");
$stmt5 = pg_prepare($conn, "new_listing", "INSERT INTO listings(listing_id, user_id, status, price, headline, description, address, postal_code, images, city, bedrooms, bathrooms, addons, building_type, driveway, house_type, ownership_type, provinces, view_type) 
VALUES(nextval('seq'), $1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18)");
$stmt6 = pg_prepare($conn,"new_people", "INSERT INTO people (user_id, salutation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method) VALUES($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13)");

function db_connect()
{
	return pg_connect("host=127.0.0.1 dbname=group10_db user=group10_admin password=zdshx4zs4j");
}
function build_simple_dropdown($result, $length, $name, $selected)
{	
	echo '<select name="' . $name . '"  class="right">';
	for($i = 0; $i < $length; $i++)
	{
		$return_value[$i] = pg_fetch_result($result, $i, $name);
		if($return_value[$i] == $selected )
		{
			echo '<option value="' . $return_value[$i] . '" selected = "selected">' . $return_value[$i] . '</option>';
		}
		else
		{
			echo "<option value='" . $return_value[$i] . "'>" . $return_value[$i] . "</option>";
		}
	}
	echo '</select>';
}
function build_dropdown($result, $name, $selected)
{
	echo '<select name=' . $name . '  class="right">';
	while ($row = pg_fetch_assoc($result)) 
	{
		if($row['value'] == $selected && $row['value'] != "0")
		{
			echo '<option value="' . $row['value'] . '" selected ="selected">' . $row['property'] .  '</option>';
		}
		else 
		{
			echo '<option value="' . $row['value'] . '">' . $row['property'] . '</option>';
		}
	}
	echo '</select>';
}
function build_radio($result, $name, $selected)
{
	while ($row = pg_fetch_assoc($result)) 
	{
		if($row['value'] == $selected)
		{	
			echo '<input type="radio" name="' . $name . '" checked="checked"' . ' value="' . $row['value'] . '" />' . $row['property'];
		}
		else 
		{
			echo '<input type="radio" name="' . $name . '" value="' . $row['value'] . '" />' . $row['property'];
		}
	}
}
function build_checkbox($table_name, $selected, $result)
{
	$table_display = str_replace("_", " ", $table_name);
	echo '<table>' . '<tr><th colspan = "2">' . ucwords($table_display) . '</th></tr>' . '<tr><td><table class= "searchboxtable">';
	$counter = 0;
	while ($row = pg_fetch_assoc($result))
	{
		if($row['value'] != 0)
		{
			echo '<tr><td>';
			if($row['value'] == 16)
			{
				echo '</table></td><td><table><tr><td>';
			}	
			if(isBitSet($counter, $selected))
			{	
				echo '<input type="checkbox" name="' . $table_name .'[]" checked="checked" value="' . $row['value'] . '"/>' . $row['property'] . '</td></tr>';
			}
			else
			{
				echo '<input type="checkbox" name="' . $table_name .'[]" value="' . $row['value'] . '"/>' . $row['property'] . '</td></tr>';
			}
			$counter++;
		}
	}
	echo '</table>';
	echo '</td></tr></table>';

}
function get_property($table_name, $value)
{
	$sql = "SELECT * FROM " . $table_name . " WHERE value = " . $value;
	$connection = db_connect();
	$result = pg_query($connection, $sql);
	$row = pg_fetch_row($result);
	return $row[$value];
}
?>