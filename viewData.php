<?php  
require_once("db.php");
?>
<table align="center">
	<td><a href="form_mahasiswaBaru.php">Form Mahasiswa Baru</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
	<form action="viewData.php" method="post"><br>
		<input type="text" name="cari">
		<input type="submit" name="submit" value="cari">
	</form>
</td>
</table>
<br>
<table align="center" border="1">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Aksi</th>
	</tr>
<body>
	<?php 
	@$cari = $_POST['cari']; 
	$sql 	= "SELECT nim, nama FROM mahasiswa1 WHERE nim LIKE '%$cari%'";
	$result	= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['nama'];
	?>
	<tr>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['nim']; ?></td>
		<td><a href="delete.php?nama=<?php echo $row['nama'] ?>">Delete</a></td>
	</tr>
	<?php
	}
		} else {
			echo "Data Tidak tersedia";
	}
		mysqli_close($conn);
	?>
</body>
</table>