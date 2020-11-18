<?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'olivdat');
    // $host = "sql206.epizy.com";
    // $user = "epiz_26977488";
    // $psw = "nYnowQeejBVCn";
    // $db_name = "epiz_26977488_olivdat";
    // $koneksi = mysqli_connect($host, $user, $psw, $db_name);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
// die;
?>  