<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'psas_devin';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if(mysqli_connect_errno()){
    echo "Kesalahan Koneksi : " . mysqli_connect_error();
    exit();
}