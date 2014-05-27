<?php
//=======================================================
// count in one-dimensional
//=======================================================
$array=array("cc"=>"1","aa"=>"2",3,4,5,6);
print_r($array);
echo "<br />";
echo count($array);
echo "<br />";
//=======================================================
// count in two-dimensional
//	result : only count the first-dimensional amount
//=======================================================
$array2=array("cc"=> array(1,2,3,4,5,6),
			   "ff"=>2,
			   "df"=>3,
			   "df"=>4,
		);
print_r($array2);
echo "<br />";
echo count($array2);
	
?>
