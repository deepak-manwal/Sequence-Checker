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

$result = check_sequence($password);
if($result)
	echo "$password Rejected ({$result['repeted']} is repeated {$result['times']} times)";
else
	echo "$password Accepted, Its a valid password";


function check_sequence($str)
{
	$len = strlen($str);
	$pair = round($len/2);
	for($counter=1; $counter<=$pair; $counter++)
	{
		for($i=0; $i< $len; $i++)
		{
			$flag = false;
			$found = 0;
			$match = substr($str,$i,$counter);
			for($j=$i+$counter;$j< $len; $j+=$counter)
			{
				$match_with = substr($str,$j,$counter);
				if($match == $match_with)
				{
					//echo "found<br>";
					$flag = true;
					$found++;
				}
				else  //skipping immediately repeated
					break;
			}
			if($flag) return array('repeted'=>$match,'times'=>$found+1);//adding one for repeat couting itself also
		}
	}
	return false;
}
?>