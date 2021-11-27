<?php
include ("Connect to mysql.php");

$Nomor = $_POST['Nomor'];

$sql=mysqli_query($connect,"delete from notes where Nomor='$Nomor'");
?>