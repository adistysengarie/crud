<?php

include'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from adiss";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "DELETE Berhasil!";
}
header("location:index.php");

?>