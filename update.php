<?php
include ("Connect to mysql.php");

$NIM = $_POST['NIM'];
$nama = $_POST['Nama'];
$prodi=$_POST['Prodi'];
$angkatan=$_POST['Angkatan'];

$sql=mysqli_query($connect,"update mahasiswa set Nama='$nama', Prodi='$prodi', Angkatan='$angkatan' where NIM='$NIM'");
?>