
<?php

echo "<br>";
echo  date("d l");

echo "<br>";
echo date("D");

echo "<br>";
echo date("d-m-y");

echo "<br>";
echo date("N");

echo "<br>";
echo date("d-m-y h-i-s");


echo "<br>";
echo date("d-m-y");

echo "<br>";
$dateE="31-02-2002";
echo $dateE;
echo "<br>";
echo strtotime($dateE);
echo "<br>";
echo date('dSM,Y A l',strtotime($dateE));
echo "<br>";

echo  date("d-m-Y");
echo "<br>";

echo date("ds -m-y");
?>