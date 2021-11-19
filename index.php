<!doctype html>
<html lang="eng">
    <head>
        <title>Daftar Belanja</title>
        <style>
            body {background-color: #B9E4C8;
            padding: 5px;}
            h2{ color: #FFFFFF;
            background-color: #9EBEA9;
            padding: 2em;
            border-radius:2em
            }
            .button{background-color:#56A470;
            padding: 2em;
            border-radius: 1em;}
        </style>
    </head>

    <body>
        <form method="POST" onsubmit="total()">
            <center><h2>Selamat Datang Di Toko Buah ITERA </h2><br>
            <label>Mangga = 15.000/kg</label><br>
            <input type="number" id="mangga" name="mangga"><br><br>
            <label>Jambu = 13.000/kg</label><br>
            <input type="number" id="jambu" name="jambu"><br><br>
            <label>Salak = 10.000/kg</label><br>
            <input type="number" id="salak" name="salak"><br><br><br>
            <input type=submit name="Submit" class="button"><br> <br>
        </form>

<div id="hasil"></div>
        <script type="text/javascript">
            <?php

            class mangga{
                public $harga;
                public function __construct($jmlh){
                    $this->jmlh = $jmlh;
                    $this->harga= 15000;
                }
                public function jmlhMangga(){
                    return $this->jmlh;
                }
                public function hrgMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                public $harga;
                public function __construct($jmlh){
                    $this->jmlh = $jmlh;
                    $this->harga= 13000;
                }
                public function jmlhJambu(){
                    return $this->jmlh;
                }
                public function hrgJambu(){
                    return $this->harga;
                }
            }

            class salak{
                public $harga;
                public function __construct($jmlh){
                    $this->jmlh = $jmlh;
                    $this->harga= 10000;
                }
                public function jmlhSalak(){
                    return $this->jmlh;
                }  
                public function hrgSalak(){
                    return $this->harga;
                }
            }
            
            ?>
            function total(){
                event.preventDefault()
                    var banyakMangga=document.getElementById('mangga').value;
                    var banyakJambu=document.getElementById('jambu').value;
                    var banyakSalak=document.getElementById('salak').value;
                    var hargaMgg = 15000;
                    var hargaJam = 13000;
                    var hargaSal = 10000;
                    var total = banyakMangga * hargaMgg + banyakJambu * hargaJam + banyakSalak * hargaSal; 
                    output = document.getElementById('hasil');
                    output.innerHTML = "Total Belanja: "+ total;
            }
        </script>
    </body>
</html>