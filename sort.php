<?php
include 'db_connectdt.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM tintuc WHERE tieude LIKE '%$search%'";
    $result = $conn->query($sql);
} else {

    $sql = "SELECT * FROM tintuc";
    $result = $conn->query($sql);
}
?>