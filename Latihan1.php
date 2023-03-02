<?php
// penulisan array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$gabungan = [100, "teks", true];

//memanggil array
// versi debungging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//versi user
echo $gabungan[0];