<?php

include 'config.php';

session_destroy();

//echo $http_referer;


header('Location:http://localhost/PHP/Loginsystem/index.php');


?>