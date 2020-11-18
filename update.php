<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = '';
$errors = array();
$username = '';
$password= '';
include 'koneksi.php';


//button register
if (isset($_POST['update'])){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);
    $id = mysqli_real_escape_string($koneksi,$_POST['id']);

    if (empty($username)){
        array_push($errors, "username is required");
    }
    if (empty($password)){
        array_push($errors, "password is required");
    }

    //kalau ga ada error akan melakukan query
    if (count($errors) == 0 ){
        $sql = "UPDATE user SET username = '$username', password = '$password' WHERE id = $id";
        //$sql = "UPDATE `user` SET `username` = '123', `password` = '123' WHERE `user`.`id` = 27";
        mysqli_query($koneksi, $sql);
        //$_SESSION['username'] = $username;
        //$_SESSION['success'] = "You are now logged in";
        header('location: admin.php');
        }
    }

 ?>