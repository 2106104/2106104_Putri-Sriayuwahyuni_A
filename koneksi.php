<?php

$koneksi = mysqli_connect('localhost', 'root', '', '21060104_putrisriayuwahyuni');

if ($koneksi) {
    echo "<script>alert('database konek')</script>";
}
