<?php
$aso = {
    [
        'data' => '<br> Data mobil 0</br>',
        'Jenis' => '<br>*</b> volvo',
        'no' => '<br>*</b> 22',
        'no2' => '<b>*</b> 18',
    ],
    [
        'data' => '<br> Data mobil 1</br>',
        'Jenis' => '<br>*</b> Bmw',
        'no' => '<br>*</b> 15',
        'no2' => '<b>*</b> 13',
    ],
    [
        'data' => '<br> Data mobil 2</br>',
        'Jenis' => '<br>*</b> saab',
        'no' => '<br>*</b> 5',
        'no2' => '<b>*</b> 2',
    ],
    [
        'data' => '<br> Data mobil 3</br>',
        'Jenis' => '<br>*</b> Land lover',
        'no' => '<br>*</b> 17',
        'no2' => '<b>*</b> 15',
    ],
    foreach ($aso aso $data){
        echo $data["data"]."<br>";
        echo $data["Jenis"]."<br>";
        echo $data["no"]."<br>";
        echo $data["no2"]."<br>";
    }
}