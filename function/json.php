<?php
//===================================
//	json  endode and decode
//===================================
//	main
//
//  json_encode();
//  json_decode();
//
//===================================
$original = array('key'=>'value','key2'=>'value2');
$json = json_encode($original);
$restored = json_decode($json,true);
print_r($original);
echo "<br />";
echo $json;
echo "<br />";
print_r($restored);

?>

