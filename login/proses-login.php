<?php
session_start();
include '../koneksi.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id_pasien,nama_pasien FROM pasien 
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);
    if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);
        $_SESSION['id_pasien']=$data_login['id_pasien'];
        $_SESSION['nama_pasien']=$data_login['nama_pasien'];
        header("Location: http://localhost/covid19/pelayanan/checkup.php");
    }
    else
    {   
        header("Location: http://localhost/covid19/pelayanan/checkup.php");
    }

}
?>