<?php 
echo "Bilangan 1 = 10 <br>";
echo "Bilangan 2 = 5 <br><br>";
echo "Berikut merupakan hasil dari setiap operasi <br> <br>";
    function jumlah($hasil,$a, $b){
        $hasil = $a + $b;
        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : $hasil";
        echo "<br>";}
    function kurang($hasil,$a, $b){
        $hasil = $a - $b;
        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : $hasil";
        echo "<br>";}
    function kali($hasil,$a, $b){
        $hasil = $a * $b;
        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : $hasil";
        echo "<br>";}
    function bagi($hasil,$a, $b){
        $hasil = $a / $b;
        echo "PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil : $hasil";
        echo "<br>";}
    function mod($hasil,$a,$b){
        $hasil = $a % $b;
        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil : $hasil";
        echo "<br>";}

    $hasil = 0;
    $a = 10;
    $b = 5;

    jumlah($hasil,$a,$b);
    echo "<br>";
    kurang($hasil,$a,$b);
    echo "<br>";
    kali($hasil,$a,$b);
    echo "<br>";
    bagi($hasil,$a,$b);
    echo "<br>";
    mod($hasil,$a,$b);
?>