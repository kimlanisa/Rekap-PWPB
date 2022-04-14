<?php
$nis = "202110556";
$nama = 'Lanisa';
$umur = 17;
$nilai = 95;
$status = TRUE;

echo "NIS  : " . $nis . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
 echo "Status : Aktif";
else 
 echo "Status : Tidak Aktif";
?>