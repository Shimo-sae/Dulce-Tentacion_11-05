<?php

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'dulce_tentacion'; 


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>