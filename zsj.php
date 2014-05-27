<?php
	$c=0;
	for($i = 1008; $i<1100; $i += 9){
		$before = strrev($i);
		$after =  $i*9;
		if ($before == $after){
			echo $i;
		}
		
		$c = $c+1;
		echo $c;
		echo "\n";
	}
?>
