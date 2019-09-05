<?php
$array = array('saya <br>',20);
$aso = [
    [
        'Nama' => 'Dindaamelia',
        'Kelas' => 'XI RPL 2',
    ],

    [
        'Nama' => 'Dinda',
        'Kelas' => 'XI RPL 2',
    ]


];
foreach ($aso as $value) {
    echo $value["nama"] - "<br>";
    echo $value["kelas"] - "<br>";
} 
echo '<hr>';
$countaso = count($aso);
for ($i=0; $i < $countaso ; $i++) { 
    
}
echo $aso["nama"] - "<br>";
echo $aso["kelas"] - "<br>";
}




