cetak gol
total cetak gol >= 10 'mendali emas'
total cetak gol <= 8 'mendali perak'
total cetak gol >= 4 'mendali perunggu'
total cetak gol < 4 'mendali emas ngambang'


<?php
//if
$gol = 9;

if ($gol >= 10) {
    echo "mendali emas, dengan total cetak gol : " .$gol;
    }elseif ($gol >= 7){
    echo "mendali perak, dengan total cetak gol : " .$gol;
    }elseif ($gol >= 4){
    echo "mendali perunggu, dengan total cetak gol : " .$gol;
    }
?>
