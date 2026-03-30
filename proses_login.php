<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$tglLahir = $_POST['tglLahir'];
$kelUmur= $_POST['kelUmur'];
$jnsKel = $_POST['jnsKel'];
$hobi = $_POST['hobi'];
$query = "INSERT INTO anggota (nama, tglLahir, kelUmur, jnsKel, hobi) VALUES ('$nama', '$tglLahir', '$kelUmur', '$jnsKel', '$hobi')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    $_SESSION['user_nama'] = $nama;
    $_SESSION['loged_in'] = true;
    header('Location: design.php');
    exit();
} else {
    $_SESSION['login_error'] = "Silahkan daftar terlebih dahulu!";
    header('Location: index.php');
    exit();
}

