<html>
<head><title>tugasform</title></head>
</head>
<body>
<FORM ACTION="tugasform.php" METHOD="POST" NAME="input">
 masukan bilangan :<input type="number" name="angka"><br>
<input type="submit" name="pilih" value="input angka"><br>
</body>
</html>
<br>

<?php
if (isset($_POST['pilih'])){
    $a = $_POST['angka'];
    echo "total bilangan : $a<br>";
}for ($i=0; $i < $a; $i++){
    echo "*";
}
?>