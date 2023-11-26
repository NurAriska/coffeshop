<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "website_coffeshop";

$koneksi = mysqli_connect($server,$username,$password,$database_name);

if ($koneksi) {
    echo "berhasil konek Database";
} else {
    echo "Gagal Konek";
}


?>