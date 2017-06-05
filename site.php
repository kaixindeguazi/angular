<?php 
	header('Access-Control-Allow-Origin:*');
	$data = array(
		array(
			'name'=>'李豪',
			'age'=>'23'
		),
		array(
			'name'=>'刘密',
			'age'=>'23'
		)
	);
	$arr = json_encode($data);
	echo $arr;
?>