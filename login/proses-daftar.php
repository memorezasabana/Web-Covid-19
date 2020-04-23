<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $id_pasien = $_POST['id_pasien'];
    $nama_pasien       = $_POST['nama_pasien'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO pasien (id_pasien, nama_pasien, username, password, telp) VALUES ('$id_pasien', '$nama_pasien', '$username', '$password', '$telp')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        header("Location: http://localhost/covid19/login/login.php");
    } else {
        echo 'error';
    }
}
?>