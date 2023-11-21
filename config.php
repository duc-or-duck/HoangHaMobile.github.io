<?php 
$server = 'localhost';
$dbname = 'phone3'; 
$username = 'root'; 
$pass = ''; 
try
{
    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $username, $pass);
}
catch (PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
?>