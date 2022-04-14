<?php
$nis ="202110556";
$nama ="Lanisa";
$nilaimtk = 80;
$nilaiindo = 90;
$nilaiingg = 80;

//Untuk Menghitung Rata-Rata
$tot = $nilaimtk+$nilaiindo+$nilaiingg;
$rata = $tot/3;
$jml = $nilaimtk+$nilaiindo+$nilaiingg;

//Untuk Menampilkan rata-rata
echo "Nis :" .$nis. "<br>";
echo "Nama :" .$nama. "<br>";
echo "Nilai Matematika :" .$nilaimtk. "<br>";
echo "Nilai B. indonesia :" .$nilaiindo. "<br>";
echo "Nilai B. inggris :" .$nilaiingg. "<br>";
echo "Nilai jumlah : $jml"."<br>";
echo "Nilai Rata-Ratanya adalah $rata";

?>