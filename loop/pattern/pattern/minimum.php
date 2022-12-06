<?php
$arr=array(100,11,12,0,13,10,15);
$temp=$arr[2];
foreach($arr as $x)
{
	if($x<$temp)
	{
		$temp=$x;
	}
}
echo "Minimum value of array = ".$temp;
?>