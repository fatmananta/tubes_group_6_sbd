<?php
//membuat koneksi ke database
    $host = 'localhost' ;
    $user = 'root' ;
    $pass = '' ;
    $database = 'tracetogether' ;

$conn = mysqli_connect($host, $user, $pass, $database) ;

if ($conn -> connect_error) {
    die("Koneksi Gagal : ".$conn->connect_error) ;
}
?>