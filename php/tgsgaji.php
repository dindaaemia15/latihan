<html>
<head><title>TUGASGAJI</title></head>
<body>
<FORM ACTION="gaji.php" METHOD="POST" NAME="input">
<center><h1>FROM PENGGAJIAN</h1></center>
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"</td>
</tr>
<tr>
<td>NIP</td>
<td><input type="number" name="nip"</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><input type="radio" name="jenis" value="laki-laki" chexcbox>laki-laki<br>
    <input type="radio" name="jenis" value="Perempuan" chexcbox>Perempuan<br></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="textarea" name="alamat"</td>
</tr>
<tr>
<td>Status</td>
<td><select name="status">
<option name ="sudah" value="menikah">menikah</option>
<option name ="belum" value="menikah">belum menikah</option>
</tr>
<tr>
<td>Jabatan</td>
<td><select name="jabatan">
<option value="HRD">HRD</option>
<option value="MANAGER">MANAGER</option>
<option value="STAFF">STAFF</option>
<option value="KARYAWAN">KARYAWAN</option></td>
</tr>
<tr>
<td>Potongan</td>
<td><input type="checkbox" name"no01" value"BPJS" checked>BPJS<br>
    <input type="checkbox" name"no01" value"KOPERASI" KOPERASI>KOPERASI<br>
    <input type="checkbox" name"no01" value"JAMSOSTEK" JAMSOSTEX>JAMSOSTEK<br>
</td>
</td>
<tr>
<td>Golongan</td>
<td><select name="golongan">
<option value "A1">A1</option>
<option value "A2">A2</option>
<option value "A3">A3</option></td>
</tr>
</table>
<br>
<ol><input type="submit" name"simpan" value"simpan"></ol>
</FROM>
</body>
</html>