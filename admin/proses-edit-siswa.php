<?php

$id_siswa = $_GET['id_siswa'];

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

include '../koneksi.php';
$sql = "UPDATE siswa SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas=$id_kelas, alamat='$alamat', no_telp='$no_telp', id_spp=$id_spp WHERE id_siswa=$id_siswa";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>alert('Sorry data not saved'); window.location.assign('?url=siswa');</script>";
}
