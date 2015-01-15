<?php
$out = '';
$rst = exec("ls /web",$out);

var_dump($out);
var_dump($rst);





$a = system("ls /web",$out);  
print_r($a);  
print_r($out); 
