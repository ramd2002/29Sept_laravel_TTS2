<?php

$arr = array(100,200,300,400);
function AccessArrayUsefilter($arRec){
    return $arRec+5;
}

$arrfilter=array_filter($arr,"AccessArrayUsefilter");
echo "<pre>";
echo "filter res<br>";
print_r($arrfilter);


function AccessArrayUsemap($arRec){
    return $arRec+5;
}

$arrmapRes = array_map("AccessArrayUsemap",$arr);
echo "<pre>";
echo "map res<br>";
print_r($arrmapRes);


function AccessArrayUsewalk($arRec,$arrD){
    echo "value: ".$arRec. "key:" .$arrD. "<br>";
}

$arrwalkRes = array_walk($arr,"AccessArrayUsewalk");
//echo  ($arr);
print_r($arrwalkRes);




?>