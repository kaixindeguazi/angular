<?php 

	$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';    
	$allow_origin = array(  
	    'http://client1.runoob.com',  
	    'http://client2.runoob.com'  
	);  

	if(in_array($origin, $allow_origin)){  
	    header('Access-Control-Allow-Origin:'.$origin);       
	} 

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