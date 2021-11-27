<?php
include ("Connect to mysql.php");

$Nomor = $_POST['Nomor'];
$Nama = $_POST['Nama'];
$Catatan=$_POST['Catatan'];

$sql=mysqli_query($connect,"update notes set Nama='$Nama', Catatan='$Catatan' where Nomor='$Nomor'");
?>