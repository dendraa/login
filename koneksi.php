<?php
$koneksi=mysqli_connect("localhost","root","","logindb");
//Cek koneksi
if (mysqli_connect_error()){
    echo "Koneksi database gagal:", mysqli_connect_error();
}else{
    echo "Berhasil ";
}
?>