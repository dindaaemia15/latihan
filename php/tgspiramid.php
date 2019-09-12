<html>
<head><title>tgspiramid</title></head>
</head>
<body>
<FORM ACTION="tgspiramid.php" METHOD="POST" NAME="input">
 masukan bilangan :<input type="number" name="angka"><br>
<input type="submit" name="pilih" value="input angka"><br>
</body>
</html>
<br>

<?php
if (isset($_POST['pilih'])){
    $a = $_POST['angka'];
    echo "total bilangan : $a<br>";
}for ($x=1; $x < $a; $x++){
    for ($z=0; $z < $x; $z++) {
    echo "";
    echo "*";
}
    echo "<br>";
}
?>
