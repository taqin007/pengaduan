<?php 
include 'koneksi.php';

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$pangkat=$_POST['pangkat'];
$jabatan=$_POST['jabatan'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$query=mysqli_query($conn, "INSERT INTO masyarakat values('$nik','$nama','$pangkat','$jabatan','$username','$password','$telp')");
if($query)
{
    ?>
    <script>
    alert("Registrasi Berhasil! Silahkan Login!");
    document.location="login.php";
    </script>
    <?php
}
?>
