<?php

    $angka1 = 10;
    $angka2 = 5;
    echo "Bilangan 1 = $angka1 <br>";
    echo "Bilangan 2 = $angka2 <br>";
    echo "Berikut merupakan hasil dari setiap operasi <br><br>";

    function operasi($angka1,$angka2,$operasi){
        if($operasi=="+"){
            $hasil=$angka1+$angka2;
            echo "PENJUMLAHAN <br>";
            echo "Operator : $operasi <br>";
            echo "Hasil : $hasil <br><br>";
        }
        elseif($operasi=="-"){
            $hasil=$angka1-$angka2;
            echo "PENGURANGAN <br>";
            echo "Operator : $operasi <br>";
            echo "Hasil : $hasil <br><br>";
        }
        elseif($operasi=="/"){
            $hasil=$angka1/$angka2;
            echo "PEMBAGIAN <br>";
            echo "Operator : $operasi <br>";
            echo "Hasil : $hasil <br><br>";
        }
        elseif($operasi=="*"){
            $hasil=$angka1*$angka2;
            echo "PERKALIAN <br>";
            echo "Operator : $operasi <br>";
            echo "Hasil : $hasil <br><br>";
        }
        elseif($operasi=="%"){
            $hasil=$angka1%$angka2;
            echo "MODULUS <br>";
            echo "Operator : $operasi <br>";
            echo "Hasil : $hasil <br><br>";
        }
        else {
            echo "operasi tidak valid. Coba lagi. <br><br>";
        }
    }

    operasi($angka1,$angka2,"+");
    operasi($angka1,$angka2,"-");
    operasi($angka1,$angka2,"/");
    operasi($angka1,$angka2,"*");
    operasi($angka1,$angka2,"%");

?>