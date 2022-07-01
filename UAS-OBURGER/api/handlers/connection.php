<?php 

$server = "localhost";
$user = "root";
$pw = "";
$database = "Rencana";

$conn = mysqli_connect($server, $user, $pw, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>