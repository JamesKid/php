<?php
	// this is use about php each
	$arr = array('you','good','morning','yes');
	print_r(each($arr));
	print_r(each($arr));
	echo '<hr />';
	/** return 
		Array
		(
			[1] => you
			[value] => you
			[0] => 0
			[key] => 0
		)
		Array
		(
			[1] => good
			[value] => good
			[0] => 1
			[key] => 1
		)
	*/
	// 0和key存放的是键
	// 1和value存放的是值　
	//  each 每执行一次，向尾部移动一步游标

	// 循环数组可以用each写
	reset ($arr);
	for(;$tmp=each($arr);) {
		echo $tmp[0],'~',$tmp[1],'<br />';
	}

?>
