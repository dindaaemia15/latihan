<?php
if(isset($_POST['input'])){
    $nama= $_POST['nama'];
    $nip= $_POST['nip'];
    $jenis = $_POST['jenis'];
    $alamat= $_POST['alamat'];
    $status = $_POST['status'];
    $jabatan= $_POST['jabatan'];
    $potongan= $_POST['potongan'];
    $golongan= $_POST['golongan'];
    echo"<center><h2><b>From Penggajian</b></h2></center>";
    echo"Nama  :$nama<br>";
    echo"Nip :$nip<br>";
    echo"jenis kelamin :$jenis<br>";
    echo"alamat :$alamat<br>";
    echo"Status :$status<br>";
    echo"Jabatan:$jabatan<br>";
    echo"Potongan:$potongan<br>";
    echo"Golongan :$golongan<br>";
    

    if(isset($_POST[''])){
        echo"Status : menikah dapat tunjangan Rp. 100.000<br>";
    }if(isset($_POST[''])){
        echo"Status : belum menikah dapat tunjangan rp. 50.000<br>";
    
    }
    }
    ?>