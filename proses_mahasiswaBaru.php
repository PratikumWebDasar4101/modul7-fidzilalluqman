<?php  
require_once("db.php");

if (isset($_POST['submit'])) {
	$nama		= $_POST['nama'];
	$nim		= $_POST['nim'];
	$jenkel		= $_POST['jenis_kelamin'];
	$prodi		= $_POST['prodi'];
	$fakultas	= $_POST['fakultas'];
	$asal		= $_POST['asal'];
	$moto_hidup	= $_POST['moto_hidup'];
}

$sql = "INSERT INTO mahasiswa1(nama, nim, jenis_kelamin, prodi, fakultas, asal, moto_hidup)
		VALUES ('$nama', '$nim', '$jenkel', '$prodi', '$fakultas', '$asal', '$moto_hidup')";

if (mysqli_query($conn, $sql)) {
	header("Location: viewData.php");
} else {
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
?>