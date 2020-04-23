<?php
include '../koneksi.php';

if (isset($_POST['antre'])) {
    $id_periksa       = $_POST['id_periksa'];
    $nama       = $_POST['nama'];
    $usia        = $_POST['usia'];
    $id_dokter = "";
    if ($_POST['id_dokter'] == "dokter_umum") {
        $id_dokter = 1;
    } else if ($_POST['id_dokter'] == "dokter_spesialis") {
        $id_dokter = 2;
    }
    $catatan  = $_POST['catatan'];
    $tgl_periksa = date("d-m-Y ");

    $sql = "INSERT INTO periksa (id_periksa, nama, usia , id_dokter,catatan, tgl_periksa) 
    VALUES ('$id_periksa', '$nama', '$usia', '$id_dokter', '$catatan', '$tgl_periksa')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        header("Location: http://localhost/covid19/pelayanan/data_pelayanan.php");
    } else {
        echo 'error';
    }
}
