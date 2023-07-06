<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "aes";

$conn2 = mysqli_connect($server, $username, $password, $database);
if (!$conn2){
    die("Error". mysqli_connect_error());
}

?>
