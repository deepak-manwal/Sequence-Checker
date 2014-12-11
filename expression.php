<?php
echo "Enter Password for checking: ";
$handle = fopen ("php://stdin","r");
$password = fgets($handle);
$password = trim($password);
if(!strlen($password))//checking for valid string
{
	echo "ABORTING! Please Provide valid Password";
	die;
}
preg_match('/(\\w+?)\\1/', $password, $result );
if($result)
	echo "$password Rejected ({$result[1]} is repeated)";
else
	echo "$password Accepted, Its a valid password";
?>