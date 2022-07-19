<?php

include'koneksi.php';
// menyimpan data kedalam variabel

$NIM            = $_POST['NIM'];
$NAMA           = $_POST['NAMA'];
$KELAS         = $_POST['KELAS'];
$ID             = $_POST['ID'];
// query SQL untuk insert data
$query="UPDATE adisss SET NIM='$NIM',NAMA='$NAMA',kelas='$KELAS'where ID='$ID'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman <index class="php"></index>
header("location:index.php");
?>