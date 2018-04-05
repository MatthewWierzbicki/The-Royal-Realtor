<?php
function displayCopyrightInfo()
{
	echo "&copy; " . date('Y') . " The Royal Realtor";
}
function redirect($location)
{
   	header("Location:".$location);
	ob_flush();
}
function display_phone_number($number)
{
    $result = preg_replace('/[^[:digit:]]/', '', $number);
    preg_match('/(\d{3})(\d{3})(\d{4})/', $result, $matches);
    return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
	
	//http://stackoverflow.com/questions/10164460/format-and-display-a-phone-number-on-a-report-page-in-php
}
?>