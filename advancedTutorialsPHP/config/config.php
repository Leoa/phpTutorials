<?php

$config['db_host'] = 'mysql';
$config['db_user'] = 'beleoa';
$config['db_pass'] = '11dd11';
$config['db_name'] = 'test';


foreach($config as $k => $v){
	define(strtolower($k),$v);
}
?>