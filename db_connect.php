<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "backend_experiments";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}
?>