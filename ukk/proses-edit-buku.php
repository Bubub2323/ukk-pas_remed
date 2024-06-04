<?php

$id_tamu = $_GET['id_tamu'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$profesi = $_POST['profesi'];
$keperluan = $_POST['keperluan'];

include 'koneksi.php';
$sql = "UPDATE tamuu SET nama='$nama', email='$email', alamat='$alamat', profesi='$profesi', keperluan='$keperluan' WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=buku');
    </script>";
}