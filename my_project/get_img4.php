<?php
$beginTime=microtime(true);
function getImg($url = "", $filename = "")
{
	$hander = curl_init();
	$fp = fopen($filename,'wb');
	curl_setopt($hander,CURLOPT_URL,$url);
	curl_setopt($hander,CURLOPT_FILE,$fp);
	curl_setopt($hander,CURLOPT_HEADER,0);
	curl_setopt($hander,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($hander,CURLOPT_TIMEOUT,60);
	curl_exec($hander);
	curl_close($hander);
	fclose($fp);
	Return true;
}
$filename = '/tmp/xx.jpg';
$url = "http://mmbiz.qpic.cn/mmbiz/mVcdzyvSAw2jlSvyYWIUwRia1XlUD3GcrzD9YHvNCyrsWEF2ACZbuBvoDeF3JT1ySvCAtz0Lpic1ItuaNfYhnr9A/0"; 
getImg($url, $filename); 

$endTime=microtime(true);
$useTime=$endTime-$beginTime;
echo $useTime;

?>
