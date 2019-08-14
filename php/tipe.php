<?php
$nim = "0411500400"; 
$nama = 'Dinda Amelia Putri';
$umur = 16;
$nilai= 98.3;
$status = TRUE;

echo "NIM : " . $nim . "<br>"; 
echo "NAMA : " .$nama . "<br>";
print "Umur : " . $umur; print "<br>"; 
printf ("Nilai : %.3f<br>", $nilai); 
if ($status)
echo "Status : Aktif"; 
else
echo "Status : Tidak Aktif";
?>