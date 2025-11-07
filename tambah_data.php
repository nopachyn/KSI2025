<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_latihan");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>

<h2>Form Tambah Data Siswa</h2>
<form method="POST">
    <label>Nama: </label><br>
    <input type="text" name="nama" required><br><br>

    <label>Kelas: </label><br>
    <input type="text" name="kelas" required><br><br>

    <input type="submit" name="submit" value="Tambah Data">
</form>
