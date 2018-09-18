<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="gambar.php" method="post" enctype="multipart/form-data">
		<table>
			<tr><td><h2>Data Mahasiswa</h2></td></tr>

		<tr><td>nama<td>:<td><input type="text" name="nama"></td></td></td></tr>

		<tr><td>Nim<td>:<td><input type="number" name="nim"><br></td></td></td></tr>
		<tr><td>fakultas<td>:
		<td><select name="fakultas" id="dropdown">
			<option value="FIT">FIT</option>
			<option value="FIK">FIK</option>
			<option value="FKB">FKB</option>
		</select></td></td></tr>
		<br>
		<tr><td>Jenis kelamin<td>:<td>
		<input type="radio" name="jeniskelamin" value="laki-laki">laki-laki
		<td><input type="radio" name="jeniskelamin" value="perempuan">perempuan </td></tr></td></td></td>
		
		<tr><td>Foto<td>:
		<td><input type="file" name="dokumen" required>
		</td></td></td></tr>
		<tr><td><input type="submit" name="upload"  value="upload"></td></td></td></td></tr>
	</table>
	</form>

</body>
</html>