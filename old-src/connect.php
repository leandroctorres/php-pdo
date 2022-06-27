<?php

declare(strict_types=1);

$pdo =null;

try {
	//$pdo = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
	$pdo = new PDO("mysql:dbname=exemplo;host=localhost", "root", "");
	//$pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "root", "");
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

return $pdo;
