<?php
// ================================JamesKid============================== 
// @author		: JamesKid  
// @time		:	
// @description : 
// @fix			: comment the ctermfg=LightGrey ctermbg=Black 
// ======================================================================
//---------------1 to 1000000 test --------------------------------------
/*
	$beginMemory = memory_get_usage();
	$c=1;
	for ($i=1; $i<10000000 ; $i++){
		$c=$c+1;
	}
	unset($i);
	unset($c);

	$endMemory = memory_get_usage();
	$useMemory = $endMemory - $beginMemory;
	echo $useMemory;
	echo "<br />";
	echo memory_get_usage();
*/
//----------------pure test ---------------------------------------------
$beginMemory = memory_get_usage();
$i=null;
$endMemory = memory_get_usage();
$useMemory = $endMemory - $beginMemory;
echo $useMemory;
echo "<br />";
echo memory_get_usage();
	

?>
