<?php
include "../koneksi.php";

$Kode = $_POST['Kode'];
$Nama_Mata_Pelajaran = $_POST['Nama_Mata_Pelajaran'];
$NIP = $_POST['NIP'];
$Jurusan = $_POST['Jurusan'];
$Kelas = $_POST['Kelas'];

$sql = mysqli_query($koneksi, "SELECT * FROM `mata_pelajaran` WHERE kode_mata_pelajaran = '$Kode' ") or die(mysqli_error($koneksi));
if (mysqli_num_rows($sql) == 0) {
	$input = "INSERT INTO `mata_pelajaran` (`kode_mata_pelajaran`, `nama_matapelajaran`, `kelas`, `jurusan`, `nip`) VALUES ('$Kode', '$Nama_Mata_Pelajaran', '$Kelas', '$Jurusan', '$NIP');";
	(mysqli_query($koneksi, $input));
	header('location:mata_pelajaran.php');
} else {
	echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Kode sudah Dipakai')
				window.location.href='mata_pelajaran.php';
			</SCRIPT>");
}
