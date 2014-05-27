<?php
	$beginTime=microtime(true);
	$c=1;
	echo $beginTime;
	for ($i=1; $i<1000000 ; $i++){
		$c=$c+1;
	}
	$endTime=microtime(true);
	$useTime=$endTime-$beginTime;
	echo "<br />";
	echo $c;
	echo "<br />";
	echo $useTime;

?>
