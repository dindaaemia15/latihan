<?php
$array = array('judul','penulis');
$aso = [
    [
    'Judul' => '<h1> Belajar PHP & Mysql untuk Pemula ',
    'Penulis' => 'Admin SMK',
    ],

    [
    'Judul' => '<h1> Tutorial PHP dari nol hingga mahir ',
    'Penulis' => 'Admin SMK',
    ],

    [
    'Judul' => '<h1> Membuat aplikasi web dengan php ',
    'Penulis' => 'Admin SMK Assalaam',
    ],

];
foreach ($aso as $value) {
    echo $value["Judul"] . "<br>";
    echo $value["Penulis"] . "<br>";
    
}
echo'<hr>';
$countaso = count($aso);
for ($i=0; $i < $countaso ; $i++) { 
    echo $aso[$i]["judul"]."<br>";
    echo $aso[$i]["Penulis"]."<br>";
}
    
]