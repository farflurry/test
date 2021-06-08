<?php
include '1.php';

$iduser=$_POST['id_user'];
$nama=$_POST['nama'];
$hakakses=$_POST['hak_akses'];
$alamat=$_POST['alamat'];
$notelp=$_POST['no_telp'];

$user=("insert into user values
('$iduser', '$nama', '$hakakses', '$alamat', '$notelp')");
mysqli_query($koneksi,$user);

?>