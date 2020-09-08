<?php 
// $koneksi = mysqli_connect("localhost:3310","root","Xampp7ptpn12","db_lpg");
$koneksi = mysqli_connect("localhost","root","","db_lpg");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>