<html>
<head><title>bintang piramid terbalik</title></head>
</head>
<body>
<FORM ACTION="tugasbintang.php" METHOD="POST" NAME="input">
 masukan bilangan :<input type="number" name="blg"><br>
<input type="submit" name="pilih" value="simpan"><br>
</body>
</html>
<br>

<?php
if (isset($_POST['pilih'])){
    $c = $_POST['blg'];
    for ($i=1; $i <= $c; $i++){
    for ($z=1; $z <= $c - $i; $z++) {
    echo "&nbsp;&nbsp;";
}
    for ($v=1; $v <= $i; $v++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<br>";
echo "total bintang :$bilangan";
}
?>

