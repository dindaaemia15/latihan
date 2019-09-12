<html>
<head><title>bintang belah ketupat</title></head>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
 masukan bilangan :<input type="number" name="blg"><br>
<input type="submit" name="pilih" value="simpan"><br>
</body>
</html>
<br>

<?php
if (isset($_POST['pilih'])){
    $c = $_POST['blg'];
    echo "total bintang :$c<br>";
    for ($i=0; $i <= $c; $i++){
    for ($z=1; $z <= $c - $i; $z++) {
    echo "&nbsp;&nbsp;";
}
    for ($v=1; $v <= $i; $v++){
        echo "*&nbsp;&nbsp;";
    }
   echo"<br>";
}
for ($i=1; $i <= $c; $i++){
    for ($z=1; $z <= $i; $z++) {
    echo "&nbsp;&nbsp;";
}
    for ($v=1; $v <= $c  - $i; $v++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}
}
?>
 
