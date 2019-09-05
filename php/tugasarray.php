<?php
$arrayNama = array("Ajeng" => 90, "Mamat" => 70, "Ucup" => 87,
"aang" => 95, "Syahrul" => 75);
foreach ($arrayNama as $Nama => $nilai){
    echo "<pre>";
if ($nilai > 85){
    echo "Nama : $nama, Nilai : $nilai , Grade A<br>";
}
elseif ($nilai > 75){
    echo "Nama : $nama, Nilai : $nilai , Grade B<br>";
}
elseif ($nilai > 65){
    echo "Nama : $nama, Nilai : $nilai , Grade C<br>";
}
}
echo "</pre>";
?>