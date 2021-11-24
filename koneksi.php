<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "oprec";

$conn = mysqli_connect($server,$username, $password, $database) or die ("koneksi gagal");
mysqli_select_db($conn, $database)
or die ("DATABASE tidak bisa dibuka");
?>
