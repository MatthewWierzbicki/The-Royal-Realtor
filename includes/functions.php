<?php

function displayCopyrightInfo()
{
	echo "&copy; " . date('Y') . " The Royal Realtor";
}
function redirect($location)
{
   	header("Location:".$location );
	ob_flush();
}
function is_valid_postal_code($postal_code)
{
	$postal_code = str_replace(' ', '', $postal_code);
	$postal_code_char = str_split($postal_code); 
	$postal_code_letters = array('D','F','I','O','Q','U');
	if (!isset($postal_code) || $postal_code == "")
	{
		return "Posal Code can't be left blank!";
	}
	if (count($postal_code)  > 6 )
	{
		return "Postal code is not valid!";
	}
for($i = 0; $i <= count($postal_code_letters)-1; $i++ )
{
	if (in_array($postal_code_letters[$i],$postal_code_char))
	{
		return false;
	}
}
	for($i = 0; $i <= count($postal_code_char); $i++ )
	{
		if ($i==0 or $i==2 or $i==4)
		{
			if (is_numeric($postal_code_char[$i]) == true)
			{
				return false;
			}			
		}
		if ($i==1 or $i==3 or $i==5)
		{
			if (is_numeric($postal_code_char[$i]) == false)
			{
				return false;
			}			
			
		}
	}
	return true;
}
function user_type($user_char)
{
    if($user_char == 'C')
    {
        return "Client";
    }
    else if($user_char == 'P')
    {
        return "Pending Agent";
    }
    else if($user_char == 'I')
    {
        return "Incomplete Client";
    }
    else if($user_char == 'D')
    {
        return "Disabled Agent";
    }
    else if($user_char == 'G')
    {
        return "Active Agent";
    }
    else if($user_char == 'A')
    {
        return "Admin";
    }
}
function display_phone_number($phone_number)
{
            switch(strlen($phone_number)) 
            {
                case 10:
                    return "(" . substr($phone_number, 0, 3) . ")" . "-" . substr($phone_number, 3, 3) . "-" .  substr($phone_number, 6, 10);
                break;
                case 11:
                    return "(" . substr($phone_number, 1, 3) . ")" . "-" . substr($phone_number, 4, 3) . "-" .  substr($phone_number, 7, 11) . " ext: " . substr($phone_number, 0, 1);
                break;
                case 12:
                    return "(" . substr($phone_number, 2, 3) . ")" . "-" . substr($phone_number, 5, 3) . "-" .  substr($phone_number, 8, 11) . " ext: " . substr($phone_number, 0, 2);
                break;
                case 13:
                    return "(" . substr($phone_number, 3, 3) . ")" . "-" . substr($phone_number, 6, 3) . "-" .  substr($phone_number, 9, 11) . " ext: " . substr($phone_number, 0, 3);
                break;
                case 14:
                    return "(" . substr($phone_number, 4, 3) . ")" . "-" . substr($phone_number, 7, 3) . "-" .  substr($phone_number, 10, 11) . " ext: " . substr($phone_number, 0, 4);
                break;
                case 15:
                    return "(" . substr($phone_number, 5, 3) . ")" . "-" . substr($phone_number, 8, 3) . "-" .  substr($phone_number, 11, 11) . " ext: " . substr($phone_number, 0, 5);
                break;
            }
}
function is_valid_phone_number($phone_number)
{
		if (!isset($phone_number) || $phone_number == "")
		{
			return " Number can't be blank.";
		}
		if (strlen($phone_number) < 10 || strlen($phone_number) >= 15 || is_numeric($phone_number)==false)
		{
			return " Number is not valid!";
		}
		return "VALID";
}
function is_existing_user($users_id)
{
	    global $conn;
	   	$result = pg_execute($conn, "is_existing_user",array($users_id));
		$records = pg_num_rows($result);
   		return $records;
}
function isBitSet($power, $decimal) 
{
	if((pow(2,$power)) & ($decimal)) 
		return 1;
	else
		return 0;
} 
function sumCheckBox($array)
{
	$num_checks = count($array); 
	$sum = 0;
	for ($i = 0; $i < $num_checks; $i++)
	{
	  $sum += $array[$i]; 
	}
	return $sum;
}
function build_sql_statement($property, $property_name)
{
	$sql_statement = "";
	for($i = 0; $i < count($property); $i++)
	{
		if($i > 0)
		{
			$sql_statement .= " OR ";
		}
		$sql_statement .= "listings." . $property_name . " = " . $property[$i];
	}
	return $sql_statement;
}
?>

