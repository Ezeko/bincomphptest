<?php

$host = 'localhost';
$db_user = 'root';
$db_name = 'bincomphptest';
$db_pwd = '';

$conn = mysqli_connect($host, $db_user, $db_pwd, $db_name);

if(!$conn){
    die(mysqli_error($conn));
}else{
    echo ("Database connected successfully");
}


?>