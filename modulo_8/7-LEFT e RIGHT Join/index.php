<?php
/*
$pdo = nem PDO('mysql:localhost;dbname=db_teste','root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 1,3");
$sql->execute();
$clientes =$sql->fetchALL();
foreach ($clientes as $key => $value) {
	echo $value['nome'];
	echo '<hr>';
}
*/
$pdo = nem PDO('mysql:localhost;dbname=db_teste','root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT DOIN cargos ON `clentes`.`cargo` = `cargos`.`id`");
$sql->execute();
$clientes =$sql->fetchALL();
foreach ($clientes as $key => $value) {
	echo $value['nome'];
	echo ' | ';
	echo $value['nome_cargo'];
	echo '<hr>';
}	
