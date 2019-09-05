<?php
$a = [
     ['Nama' => 'Ujang', 'Kelas' => 'XI RPL2', 'Alamat' => 'Rancamanyar'],
     ['Nama' => 'Mahmud', 'Kelas' => 'XI RPL2', 'Alamat' => 'Bojongsayang'],
     ['Nama' => 'Ucok', 'Kelas' => 'XI RPL2', 'Alamat' => 'Bojongkukun']
];
echo "<pre>";
print_r ($a);
echo "</pre>";
$mode = current($a[2]);
echo  $mode. "<br>";
$mode = current($a[1]);
echo $mode. "<br>";
next($a);
$mode = key($a);
echo $mode. "<br>";
reset($a);
$mode = current($a[1]);
echo $mode. "<br>";



