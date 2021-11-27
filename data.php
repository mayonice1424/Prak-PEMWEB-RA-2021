<?php
    include("Connect to mysql.php");
    $sql = mysqli_query($connect, "SELECT * FROM notes");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>