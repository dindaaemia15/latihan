<?php
   if (isset($_POST['input'])){
          $nama = $_POST ['a'];
          $p = $_POST ['mapel1'];
          $v= $_POST ['mapel2'];   
          echo "Nama  : <b>$nama</b><br>";
          echo "mapel1     : <b>$$p</b><br>";
          echo "mapel2     : <b>$v</b><br>";
          $rata = ($p + $v) /2;
          echo "Rata - Rata : <b>$rata</b><br>";
          }if ($rata >= 75){
              echo "Status : <b>LULUS </b>";
          }else{
              echo "Status : <b>TIDAK LULUS</b>";
          }
?>