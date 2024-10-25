<?php

try {
    //serveradı/databaseadı/kullanıcıadı/kullanıcısifre
	$baglanti=new PDO("mysql:host=localhost; dbname=cahitcen_web", 'cahitcen_datahan','c9nOu7cl&]Qd',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	
} catch (Exception $e) {
	echo $e->getMessage();
}

?>