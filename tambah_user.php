<?php
    session_start();
    $errors = array();
    $username = '';
    $password= '';
    include 'koneksi.php';
 
//button register
if (isset($_POST['tambah'])){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);

    if (empty($username)){
        array_push($errors, "username is required");
    }
    if (empty($password)){
        array_push($errors, "password is required");
    }

    //kalau ga ada error akan melakukan query
    if (count($errors) == 0 ){
        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        mysqli_query($koneksi, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: admin.php');
        }
    }
