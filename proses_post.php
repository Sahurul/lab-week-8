<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nilai = $_POST['nilai'];

echo "Nama : ".$nama."<br>";
echo "NIM : ".$nim."<br>";  
echo "Nilai : ".$nilai."<br>";
echo "<br>";
if ($nilai < 50){
    echo "maaf anda tidak lulus";
} else {
    echo "selamat anda lulus";
}