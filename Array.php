<?php
echo "<ul><li><h2>1.Index array</h2></li></ul>";
$indexarray=array('80',90.00,50,60,true,"RRR");
echo "<pre>";
print_r($indexarray);
echo "<pre>";
var_dump($indexarray);
echo "<pre>";
var_export($indexarray);
echo "<pre>";
$num=count($indexarray);
for($i=0;$i<$num;$i++){
    echo $i."-".$indexarray[$i].",";
}


echo "<ul><li><h2>2.Associative array</h2></li></ul>";
$assarray= array("Math"=>78,"science"=>98,"English"=>90);
print_r($assarray);
echo "<pre>";
var_dump($assarray);
echo "<pre>";
var_export($assarray);



echo "<ul><li><h2>3.Multidimensional array</h2></li></ul>";
$multiarray=array("School-Name"=>array("Std-8"=>array("A"=>array("Math"=>78,"science"=>98,"English"=>90),
"B"=>array("Math"=>98,"science"=>76,"English"=>86),
"C"=>array("Math"=>97,"science"=>68,"English"=>93)),
"Std-9"=>array("A"=>array("Math"=>45,"science"=>32,"English"=>63),
"B"=>array("Math"=>75,"science"=>86,"English"=>82),
"C"=>array("Math"=>82,"science"=>32,"English"=>73)),
"Std-10"=>array("A"=>array("Math"=>68,"science"=>48,"English"=>93),
"B"=>array("Math"=>97,"science"=>56,"English"=>96),
"C"=>array("Math"=>87,"science"=>83,"English"=>83))));
print_r($multiarray);
?>