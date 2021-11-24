<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "euforia";

$koneksi = mysqli_connect($server,$user,$pass,$dbname);
if(mysqli_connect_errno()){
    echo "Database connection failed".mysqli_connect_error();
}
?>