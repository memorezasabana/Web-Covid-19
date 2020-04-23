<?php
include '../koneksi.php';

if (isset($_POST['tampil'])) {
    $nama       = $_POST['nama'];
    $usia        = $_POST['usia'];
    $alamat  = $_POST['alamat'];
    $tgl_tes = date("d-m-Y ");
    $id_hasil = "";
    if($_POST['demam']== "Ya" && $_POST['batuk']== "Ya" && $_POST['sesak_nafas']== "Ya" 
    && $_POST['riwayat_kontak']== "Ya" && $_POST['riwayat_bepergian']== "Ya"){
        $id_hasil =1;
    }else{
        $id_hasil= 2;
    }


    $sql = "INSERT INTO pelayanan (nama, alamat, usia, id_hasil, tgl_tes) VALUES ('$nama', '$alamat', '$usia', '$id_hasil', '$tgl_tes')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        header("Location: http://localhost/covid19/pelayanan/data_checkup.php");
    } else {
        echo 'error';
    }
}
