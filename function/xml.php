<?php
//" ================================JamesKid============================== 
//" @author		: JamesKid  
//" @time		: 2014_03_06_16_56
//" @description :  this is the xml of php 
//" ======================================================================
//
//=======================================================================
//  DOMDocument
//=======================================================================
/*
$beginMemory = memory_get_usage(); 
header("Content-type:text/html;charset=utf-8");  
$doc = new DOMDocument();
$doc->load('xml/area.xml');
$areas = $doc->getElementsByTagName( "urlset" ); 
foreach( $areas as $area ) 
{ 
	$names = $area->getElementsByTagName( "city_name" ); //取得name的标签的对象数组 
	$length=$names->length;
	$result=array();
	for ($i=0; $i<$length; $i++){
		if($names->item($i)->nodeValue=='安庆'){
			$result[]=$area->getElementsByTagName( "city_name" )->item($i)->nodeValue;
			$result[]=$area->getElementsByTagName( "city_id" )->item($i)->nodeValue;
			$result[]=$area->getElementsByTagName( "city_deals_url" )->item($i)->nodeValue;

		}
	}
	print_r($result);
} 
echo "<br />";
$endMemory = memory_get_usage();
$useMemory = $endMemory - $beginMemory;
echo $useMemory;
echo "<br />";
echo memory_get_usage();
*/
//=======================================================================
//  XMLReader
//=======================================================================
//---------------------------pirnt all city_name ------------------------
/*
$reader = new XMLReader();
$reader->open('xml/area.xml');
while ($reader->read()) {
	if ($reader->nodeType == XMLREADER::ELEMENT && $reader->localName == 'url'){
		$reader->read();
			print $reader->value . " \n";
	}
}
 */
//-----------------------pirnt the node you want ------------------------
$beginMemory = memory_get_usage(); 
$reader = new XMLReader();
$reader->open('xml/area.xml');
while ($reader->read()) {
	if ($reader->nodeType == XMLREADER::ELEMENT && $reader->localName == 'city_name'){
		$reader->read();
		if($reader->value == "安庆") {
			print $reader->value . " \n";
			echo "<br />";

			break;
		}
	}
}
echo "<br />";
$endMemory = memory_get_usage();
$useMemory = $endMemory - $beginMemory;
echo $useMemory;
echo "<br />";
echo memory_get_usage();
//=======================================================================
//  simplexml_load_file
//=======================================================================
//$sx = simplexml_load_file('xml/area.xml');
//foreach ($sx->url as $person) {
//	$firstname_text_value = $person->city_name;
//	$lastname_text_value = $person->city_id;
//	$city_url = $person->city_deals_url;
//	print "$firstname_text_value $lastname_text_value $city_url";
//	print "<br />";
//}
?>
