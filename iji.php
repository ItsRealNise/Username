<?php
include 'mysql.php';
$nama = $_GET['nama'];
$query="DELETE from anjay where nama='$nama'";
mysqli_query($kon, $query);
header("location:index.php");
?>