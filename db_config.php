<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "phone";

// Kết nối đến CSDL
$conn = new mysqli($server, $username, $password, $database);


// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->query("SET SESSION wait_timeout = 28800");
?>
