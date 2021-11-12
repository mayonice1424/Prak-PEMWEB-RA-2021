<?php
include ("Connect to mysql.php");

$NIM = $_POST['NIM'];

$sql=mysqli_query($connect,"delete from mahasiswa where NIM='$NIM'");
?>