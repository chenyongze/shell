<?php
echo 	dirname(__FILE__);
echo memory_get_usage();
p($_SERVER ['argv']);
$op = $argv[1];
$rst = preg_match('/([^a-z_]+)/i',$op,$matches);
var_dump($rst);
p($matches);
echo 	memory_get_usage();
//$url = 'http://www.baidu.com';
$url = 'ajax.php';
echo curl($rst,$url);
var_dump($rst);
exit;
echo $argc ;
if($argc <=1 || $argv[1] = '-h')
{
	usage();
	exit;
}
p($argv);
/******************print**********/
function p($parem)
{
	echo "\n";
	print_r($parem);
	echo "\n";
}

function usage()
{
	echo "usage:wx_member_card_id_daemon.php [start/stop/-h]\n";
	echo "example:wx_member_card_id_daemon.php start\n";
}



function curl(&$rst,$url)
{
			$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_COOKIEFILE, "");
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		
		$rst = curl_exec ($ch);
		curl_close ($ch);
}



