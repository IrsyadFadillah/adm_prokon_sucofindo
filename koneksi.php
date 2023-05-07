<?php
    $nameserver = "localhost";
    $username = "root";
    $password = "";
    $database = "prokon";

    $koneksi = mysqli_connect($nameserver, $username, $password, $database);

    if(!$koneksi) {
        echo "Anda kurang beruntung";
    }

?>
