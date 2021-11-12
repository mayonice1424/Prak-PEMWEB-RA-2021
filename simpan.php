<?php
include ("Connect to mysql.php");

$NIM = $_POST['NIM'];
$nama = $_POST['Nama'];
$prodi=$_POST['Prodi'];
$angkatan=$_POST['Angkatan'];

$sql=mysqli_query($connect,"insert into mahasiswa set Nama='$nama', NIM='$NIM',Prodi='$prodi', Angkatan='$angkatan'");
?>