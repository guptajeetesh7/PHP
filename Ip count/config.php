<?php


	mysql_connect('localhost' , 'root' ,'');



$database = "CREATE DATABASE ip";
mysql_query($database); 


$query = "CREATE TABLE `ip`.`hit_count` ( `count` INT NOT NULL , PRIMARY KEY (`count`)) ENGINE = InnoDB;";
mysql_query($query) ;


$query = "CREATE TABLE `ip`.`hit_ip` ( `ip` VARCHAR(15) NOT NULL ) ENGINE = InnoDB;" ;
mysql_query($query);



mysql_select_db("ip");

$query = "INSERT INTO `hit_count` VALUES ( 0 )";
mysql_query($query);



?>