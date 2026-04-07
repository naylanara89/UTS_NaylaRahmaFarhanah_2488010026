<?php
include '../koneksi.php';

$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($conn, "UPDATE pengaduan SET status='$status' WHERE id='$id'");

header("Location: data.php");
?>