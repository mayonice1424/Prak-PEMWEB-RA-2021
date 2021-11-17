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
            Selamat Datang di Tugas 3
        </h1>
    <hr>
    <br>
    <br>
    <?php
        function prima($x){
            for ($i = 1; $i <= $x ;$i++){
                $a = 0;
                for($j=1;$j<=$i;$j++){
                    if($i%$j == 0 && $i !=1){
                        $a++;
                    }
                }
                if($a==2){
                    echo("\r\n".$i );
                }
                }
            }

            echo prima(50)
    ?>


    </body>
</html>