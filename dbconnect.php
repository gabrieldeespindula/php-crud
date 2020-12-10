<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()):
    echo "Connection error:".mysqli_connect_error();
endif;

?>