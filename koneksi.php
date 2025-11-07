<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_latihan");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi ke database berhasil!";
}
?>
