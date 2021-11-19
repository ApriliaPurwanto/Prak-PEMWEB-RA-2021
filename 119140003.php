<html>
    <head>
        <title>Toko Buah ITERA</title>
        <link rel="stylesheet" type="text/css" href="119140003.css">
    </head>

    <body>
        <form method="POST" onsubmit="total()">
            <h3>Daftar Belanja Toko Buah ITERA</h3>
            <br>
            Mangga (kg)
            <br>
            <input type="number" id="mangga" name="mangga">
            <br>
            Jambu (kg)
            <br>
            <input type="number" id="jambu" name="jambu">
            <br>
            Salak (kg)
            <br>
            <input type="number" id="salak" name="salak">
            <br><br>
            <input type=reset value="Reset Buah">
            <input type=submit value="Hitung Harga">
                
        </form>

<div id="hasil"></div>
        <script type="text/javascript">
            <?php

            class mangga{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 15000;
                }

                public function jumlahMangga(){
                    return $this->jumlah;
                }
                
                public function hargaMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 13000;
                }

                public function jumlahJambu(){
                    return $this->jumlah;
                }
                
                public function hargaJambu(){
                    return $this->harga;
                }
            }

            class salak{
                public $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 10000;
                }

                public function jumlahSalak(){
                    return $this->jumlah;
                }
                
                public function hargaSalak(){
                    return $this->harga;
                }
            }
            
            ?>
            function total(){
                event.preventDefault()

                var banyakMangga=document.getElementById('mangga').value;
                var banyakJambu=document.getElementById('jambu').value;
                var banyakSalak=document.getElementById('salak').value;

                var hargaMangga=15000;
                var hargaJambu= 13000;
                var hargaSalak= 10000;

                var total = banyakMangga * hargaMangga + banyakJambu * hargaJambu + banyakSalak * hargaSalak; 

                output = document.getElementById('hasil');
                output.innerHTML = "Total Harga Belanja : " + total;
            }
        </script>
    </body>
</html>