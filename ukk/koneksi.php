<?php

    $koneksi = mysqli_connect('localhost', 'root' , '', 'db_ukk');

    if(!$koneksi) {
        echo "Koneksi Gagal";
    }

?>