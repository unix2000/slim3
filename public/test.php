<?php
require '../vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;dbname=phalcon2",'root','root');
$pdo->exec("set names 'utf8';");
$db = new NotORM($pdo);


$datas = $db->items()
		->select('id,address')
		->limit(10);

foreach ($datas as $k => $v) {
	echo $v['id'].'--'.$v['address']."<br />";
}