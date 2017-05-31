<?php

 ob_start();
 session_start();

 
mysql_connect('localhost','root','');

$query ="CREATE DATABASE `login`";

mysql_query($query) ;

mysql_select_db("login");

$query = "CREATE TABLE `login`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

mysql_query($query) ;



?>