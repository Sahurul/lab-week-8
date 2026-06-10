<?php

echo "Hello, World! first php syntax";

echo "<br><h1> First Coding BTW :) </h1>";

//1. variables in php
$name = "Faust"; //string
$Umur = 30; // integer
$ipk = 4.0;// double
$aktif = true; //boolean

echo $name;

echo "Nama kamu: ".$name."<br> Umur kamu: ".$Umur."<br> IPK kamu: ".$ipk. "<br>";

//2. aritmatika

echo "<br><hr>";
echo "<h1>2. Aritmatika </h1>";
$a = 10;
$b = 5;

echo "A- $a <br>" ;
echo "B- $b <br>" ;

echo "Penjumlahan  = ".($a+$b)."<br>";
echo "Pengurangan  = ".($a-$b)."<br>";
echo "Perkalian  = ".($a*$b)."<br>";
echo "Pembagian  = ".($a/$b)."<br>";

//3. operator perbandingan
echo "<br><hr>";
echo "<h1>3. Operator Perbandingan </h1>";

if($a > $b){
    echo "A lebih besar dari B";
} elseif($a < $b){
    echo "A lebih kecil dari B";
} else {
    echo "A sama dengan B";
}

//4. Form Html, get or post
echo "<br><hr>";
echo "<h1>4. Form Html </h1>";

?>
<form method="GET" action="proses.php">
    <label for="">Keyword</label>
    <input type="text" name="keyword">
    <button type="submit">kirim</button>
   
</form>