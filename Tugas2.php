<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>
            Selamat Datang di Tugas 2
        </h1>
    <hr>

    <?php
    $nama =["ilham","larine","qifuat","toda","anevi","samid","kifuat","ren","nurul","nur"];
    sort($nama,SORT_FLAG_CASE);
    print_r (array_values($nama));
            
    ?>
</body>
</html>



