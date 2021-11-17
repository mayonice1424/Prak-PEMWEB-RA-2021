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
            Selamat Datang di Tugas 1
        </h1>
    <hr>
    <br><br>
    <form method="GET" action="">
    <label>Bilangan 1</label> 
    <input type="number" name=angka1 placeholder="Bilangan 1..." ><br>
    <label>Bilangan 2</label> 
    <input type="number" name=angka2 placeholder="Bilangan 2..."><br> <br><br>
    <input type="submit" name="submit" value="Submit">   
    </form>
    </center>

    <?php
        $number1 = $_GET["angka1"];
        $number2 = $_GET["angka2"];
        $operator = array("+","-","*","/","%");

        echo ("PENJUMLAHAN");
        echo "<br>";
        echo "Operator : ";
        echo $operator[0];
        echo "<br>";
        function tambah ($number1,$number2){
            $hasil = $number1 + $number2;
            return $hasil;
        }
        echo("Hasil : ");
        echo tambah($number1,$number2);
        echo "<br>";
        echo "<br>";

        echo ("PENGURANGAN");
        echo "<br>";
        echo "Operator : ";
        echo $operator[1];
        echo "<br>";
        function kurang ($number1,$number2){
            $hasil = $number1 - $number2;
            return $hasil;
        }
        echo("Hasil : ");
        echo kurang($number1,$number2);
        echo "<br>";
        echo "<br>";

        echo ("PERKALIAN");
        echo "<br>";
        echo "Operator : ";
        echo $operator[2];
        echo "<br>";
        function kali ($number1,$number2){
            $hasil = $number1 * $number2;
            return $hasil;
        }
        echo("Hasil : ");
        echo kali($number1,$number2);

        echo "<br>";
        echo "<br>";
        echo ("PEMBAGIAN");
        echo "<br>";
        echo "Operator : ";
        echo $operator[3];
        echo "<br>";
        function bagi ($number1,$number2){
            $hasil = $number1 / $number2;
            return $hasil;
        }
        echo("Hasil : ");
        echo bagi($number1,$number2);

        echo "<br>";
        echo "<br>";
        echo ("MODULUS");
        echo "<br>";
        echo "Operator : ";
        echo $operator[4];
        echo "<br>";
        function mod ($number1,$number2){
            $hasil = $number1 % $number2;
            return $hasil;
        }
        echo("Hasil : ");
        echo mod($number1,$number2);


    ?>
</body>
</html>

