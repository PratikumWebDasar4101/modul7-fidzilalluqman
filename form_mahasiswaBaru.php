<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 align="center">Form Pendaftaran Baru</h3>
	<table border="1" align="center">
		<form action="proses_mahasiswaBaru.php" method="post">
			<tr>
				<th align="left">Nama</th>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<th align="left">NIM</th>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<th align="left">Jenis Kelamin</th>
				<td><input type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki<br>
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<th align="left">Prodi</th>
				<td>
				<select name="prodi" id="prodi">
						<option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						<option value="Teknik Industri">Teknik Industri</option>
					</select>
				</td>
			</tr>
			<tr>
				<th align="left">Fakultas</th>
				<td>
				<select name="fakultas" id="fakultas">
						<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
						<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
						<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
					</select>
				</td>
			</tr>
			<tr>
				<th align="left">Asal</th>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<th align="left">Moto Hidup</th>
				<td><textarea cols="25" rows="5" name="moto_hidup"></textarea></td>
			</tr>
			<tr>

				<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewData.php">Data Mahasiswa</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>