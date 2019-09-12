<?php
if(isset($_POST['simpan'])){
    $nama= $_POST['nama'];
    $nis= $_POST['nis'];
    $alamat= $_POST['alamat'];
    $jk= $_POST['jenis'];
    $agama= $_POST['agama'];
    $asalsekolah=$_POST['asalsklh'];
    $orgtuawali= $_POST['orgtuawali'];
    $total= $_POST['total'];
    $email= $_POST['email'];

    echo "Nama : <b>$nama<br></b>";
    echo "Nisn : <b>$nisn<br></b>";
    echo "Alamat : <b>$alamat<br></b>";
    echo "Jenis Kelamain : <b>$jenis<br></b>";
    echo "Agama : <b>$agama<br></b>";
    echo "Asal Sekolah : <b>$asalsklh<br></b>";
    echo "Nama orang tua/Wali: <b>$orgtuawali<br></b>";
    echo "Mata Pelajaran Yang Disukai :";
   
    if(isset($_POST['mtk'])){
    echo "- " . $_POST['mtk'] . "<br>";
    }
    if(isset($_POST['ipa'])){
    echo "- " . $_POST['ipa'] . "<br>";
    }
    if(isset($_POST['ips'])){
    echo "- " . $_POST['ips'] . "<br>";
    }
    if(isset($_POST['indo'])){
    echo "- " . $_POST['indo'] . "<br>";
    }
    if(isset($_POST['pai'])){
    echo "- " . $_POST['pai'] . "<br>";
    }
    echo "Total Nilai Ijazah SMK : <b>$total<br></b>";
    echo "Email :<b>$email<br></b>";
}
    ?>

















    

}
?>