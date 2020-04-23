<?php
$koneksi = mysqli_connect('localhost','root','','db_covid');
$id = $_GET['id_periksa'];
$query = mysqli_query($koneksi,"DELETE FROM periksa WHERE id_periksa=$id");

if($query>0){
header("Location : http://localhost/covid19/pelayanan/data_pelayanan.php");
}
