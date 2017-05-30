<?php

include 'config.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exits($ip){

global $user_ip;

$query = "SELECT `ip` FROM  `hit_ip` WHERE `ip` = '$user_ip' ";
$query_run = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($query_run)==0){

	ip_add($user_ip);
	update_count();
	return false;
} 

else{
	return true;
}

}

function ip_add($ip){
	global $user_ip;

	$query = "INSERT INTO `hit_ip` VALUES ('$user_ip')";
	mysql_query($query);

}



function update_count(){

		$query = "SELECT `count` FROM `hit_count`";
		if($query_run = mysql_query($query))
		
			{
				$count = mysql_result($query_run, 0 ,'count');
				$count ++;
				

				$query_update= "UPDATE `hit_count` SET `count` = '$count' ";

				$query_update_run = mysql_query($query_update) or die(mysql_error());
			}
		

}



if(ip_exits($user_ip)){
	echo "IP Already Exits";
}
else{
	echo "Doesn't exists--Adding IP";
}


?>