<?php
$array = array('barang','harga','berat');
$aso = [
        'barang' => 'Buku tulis',
        'harga' => '4000',
        'berat' => '100 Gram',
       ],
    ];
    foreach ($aso as $data) {
        echo $array[0].':'.$data['barang']."<br>";
        echo $array[1].':'.$data['harga']."<br>";
        echo $array[2].':'.$data['berat']."<br>";
    }
    ?>