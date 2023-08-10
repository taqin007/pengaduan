<?php
include 'koneksi.php';

$tgl = date('Y/m/d');
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jdl = $_POST['judul_laporan'];
$isi = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$status = 'proses';

$query = mysqli_query($conn, "INSERT INTO pengaduan (tgl_pengaduan, nama, nik, judul_laporan, isi_laporan, foto, status) values('$tgl','$nama','$nik','$jdl','$isi','$foto','$status')");
move_uploaded_file($file, "foto/" . $foto);
if ($query) {
?>
    <script>
        alert("Terimakasih Sudah Melaporkan Pengaduan, Laporan Anda Akan Segera Kami Proses!");
        document.location = "index.php";
    </script>
<?php
}
?>