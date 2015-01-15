<?php  
	$redis = new redis();  
	$result = $redis->connect('127.0.0.1', 6333);  
	var_dump($result); //结果：bool(true)  
?>  
