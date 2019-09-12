<html>
   <head><title>Pengolahan Form</title></head>
   <body>
      <FORM ACTION="" METHOD="POST" NAME="input">
          Nama Anda : <input type="text" name="Nama"><br><br>
          Kelas     : <input type="text" name="Kelas"><br><br>
          Alamat     : <input type="text" name="Alamat"><br><br>
          Hoby     : <input type="text" name="Hoby"><br><BR>        
          <input type="submit" name="Input" value="Input">
      </FORM>
    </body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$kelas = $_POST['Kelas'];
$hobby = $_POST['Hoby'];
echo "nama : <b>$nama</b><br>";
echo "alamat : <b>$alamat</b><br>";
echo "kelas : <b>$kelas</b><br>";
echo "hobby : <b>$hobby</b><br>";

}
?>




