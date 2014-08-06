<?php
	/** 此为数据表转移脚本,用于两个表的字段名字不一样*/
	header("Content-Type: text/html; charset=utf-8");
	$con = mysql_connect("192.168.1.99","gameiboy","8863166");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("moco_infos", $con);
	mysql_query("set names utf8");
	$sql = "select * from moco_infos.infos_activity ";

	$arr = array();
	$query = mysql_query($sql);
	while($row=mysql_fetch_assoc($query)) {
		$arr[]=$row;
	} 

	mysql_close($con);
	//print_r($arr);
	//die;
	//echo "yes i ";
	//die;
	insertToDataBase($arr);

function insertToDataBase($arr){
	$con = mysql_connect("192.168.1.99","gameiboy","8863166");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("moco_infos", $con);
	mysql_query("set names utf8");
	foreach( $arr as $info ){  //遍历数组写入数据库
		$control="insert into moco_biz.buss_bigsales (
			`bs_id`,
			`bs_name`,
			`bs_type`,
			`bs_content`,
			`bs_start`,
			`bs_end`,
			`bs_allowed`,
			`bs_updatetime`,
			`bs_updateuser`,
			`bs_exptime`,
			`bs_busstype`,
			`bs_bussattrs`,
			`bs_pic`
		) values (
			'$info[act_id]',
			'$info[act_title]',
			'$info[act_busstype]',
			'$info[act_contents]',
			'$info[act_begin]',
			'$info[act_end]',
			'$info[act_allowed]',
			'$info[act_updatetime]',
			'$info[act_seller]',
			'$info[act_createtime]',
			'$info[act_busstype]',
			'$info[act_bussattr]',
			'$info[act_cover]'
		) 
		";
		mysql_query($control,$con);
	}
	mysql_close($con);
}
?>
