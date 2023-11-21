<?php

include './koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];



$query = "INSERT INTO anggota_osis VALUES('$id','$username','$password','$nis','$kelas','$email','$alamat')";



mysqli_query($koneksi, $query);

header("location: ./index.php");
exit;
