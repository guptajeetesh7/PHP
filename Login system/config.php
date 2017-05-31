<?php

 ob_start();
 
 session_start();


//echo  $_SERVER[' HTTP_REFERER '];

$http_referer = $_SERVER['HTTP_REFERER'];

 function loggedin(){

 if(isset($_SESSION['username']) && !empty($_SESSION['username']))
 {
 	return true ;

 }
 else
 {
 	return false;
 }

}





mysql_connect('localhost','root','');

$query ="CREATE DATABASE `login`";

mysql_query($query) ;

mysql_select_db("login");

$query = "CREATE TABLE `login`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

mysql_query($query) ;



?>