<?php
if(isset($_POST['submit'])){
    $nama= $_POST['nama'];
    $nip= $_POST['nip'];
    $jenis= $_POST['jenis'];
    $alamat= $_POST['alamat'];
    $status= $_POST['status'];
    $jabatan= $_POST['jabatan'];
    $potongan= $_POST['potongan'];
    $golongan= $_POST['golongan'];

    echo"<pre>";
    echo"<h3 align='right'>".date("d/m/Y H:i;s")."</h3>";
    echo"nama       :<b>$nama</b><br>";
    echo"nip        :<b>$nip</b><br>";
    echo"jenis      :<b>$jenis</b><br>";
    echo"alamat     :<b>$alamat</b><br>";
    echo"status     :<b>$status</b><br>";
    echo"jabatan    :<b>$jabatan</b><br>";
    echo"potongan   :<b>$potongan</b><br>";
    echo"golongan   :<b>$golongan</b><br>";
    
    if($golongan == 'A1'){
        $gol = 250000;
    }
    elseif($golongan == 'A2'){
    }
    else{
        $gol = 150000;
    }
    if($status == 'menikah'){
        $status = 100000;
    }
    else{
        status = 50000;
    }
    if($jabatan == 'HRD'){
        $jabatan = 5000000;
    }
    elseif($jabatan == 'manager'){
        $jabatan = 4500000;
    }echo"Necho"Nama  :<b>$nama</b><br>";ama  :<b>$nama</b><br>";
    elseif($jabatan ==)
    


    ?>