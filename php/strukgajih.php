<html>
<head><title>struk gajih</title></head>
<body>
<FORM ACTION="prosesgaji.php" METHOD="POST" NAME="input">
Nama:
        <input type="text" name="nama"><br><br>
 NIP:
        <input type="number" name="nip"><br><br>
Jenis Kelamin :
        <br><input type="radio" name="jenis" value="laki-laki" checkbox>laki-laki
        <br><input type="radio" name="jenis" value="perempuan" checkbox>perempuan<br><br>
<table>Alamat:<table><textarea name="alamat" cols="40"
          rows="5"></textarea></table><br><br>
 
 Status :
        <td><select name ="Status">
        <option value="menikah">Menikah</option>
        <option value="belummenikah">Belum Menikah</option>
        </select></td><br><br>
Jabatan :
        <td><select name ="jabatan">
        <option value="hrd">HRD</option>
        <option value="manager">Manager</option>
        <option value="staff">Staff</option>
        <option value="karyawan">Karyawan</option>
        </select></td><br><br>
Potongan :
        <input type="checkbox" name="pilihan1" value="BPJS"checked> BPJS
        <input type="checkbox" name="pilihan2" value="Operasi"checked> Operasi
        <input type="checkbox" name="pilihan3" value="Jamsostek"checked> Jamsostek<br><br>
Golongan :
        <td><select name ="golongan">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        </select></td><br><br>
<input type="submit" name"input" value"simpan">
</form>
</body>
</html>