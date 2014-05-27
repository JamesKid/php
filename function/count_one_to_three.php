<?php
/* metho 1
$number=array(0,1,2,3,4,5,6,7,8,9);
$arr=array();
unset($number[2]);
$number=array_values($number);
print_r($number);
echo "<br />";
// 重新排列数组
while($value = current($number)){
	$arr[]=$value;
	next($number);
}
var_dump($arr);
$count=count($number);
echo $count;
 */
// metho 2  约瑟夫环法
header("Content-Type:text/html;charset=utf-8");

function king($n,$m) {     //n为猴子数，m为数的次数
	$monkey = range(1,$n); // put the 1,2,3 to array monkey
	$i=0;
	while(count($monkey)>1) {	//猴子数多于1的时候
		$i+=1;//开始查数
		$head=array_shift($monkey);//直接一个一个出列最前面的猴子
		if($i%$m!=0){
			array_push($monkey,$head);//如果没有数到m或m的倍数，则把该猴子放回尾部去
		}
	}
	return $monkey[0];
}
echo "剩余".king(10,3)."号猴子";
?>
