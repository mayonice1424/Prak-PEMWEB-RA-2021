<?php
include ("Connect to mysql.php");

$Nomor = $_POST['Nomor'];
$Nama = $_POST['Nama'];
$Catatan=$_POST['Catatan'];

$sql=mysqli_query($connect,"insert into notes set Nama='$Nama', Nomor='$Nomor', Catatan ='$Catatan'");
?>