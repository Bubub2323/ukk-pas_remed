<?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $profesi = $_POST['profesi'];
    $keperluan = $_POST['keperluan'];

    include'koneksi.php';
    $sql = "INSERT INTO tamuu (nama,email,alamat,profesi,keperluan) VALUES('$nama','$email','$alamat','$profesi','$keperluan')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("Location:?url=buku");
    }else{
        echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=buku');</script>";
    }


?>