<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "database_football";
$koneksi = mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_error()) {
    echo "Koneksi Gagal : ".mysqli_connect_error();
}

?>