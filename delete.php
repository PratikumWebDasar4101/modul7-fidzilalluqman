<?php  
require_once("db.php");

$nama = $_GET['nama'];
$sql = "DELETE FROM mahasiswa1 WHERE nama='$nama'";
if (mysqli_query($conn, $sql)) {
    header("Location: viewData.php");
}else {
    echo "Gagal";
}
?>