<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "Connection error:".mysqli_connect_error();
endif;

?>