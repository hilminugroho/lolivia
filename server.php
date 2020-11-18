<?php
    session_start();
    $errors = array();
    $username = '';
    $password= '';
    include 'koneksi.php';
 
//button register
if (isset($_POST['register'])){
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
        header('location: login.php');
        }
    }

if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);

    if (empty($username)){
        array_push($errors, "username is required");
    }
    if (empty($password)){
        array_push($errors, "password is required");
    }
    if (count($errors) == 0 ){
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
        $result= mysqli_query($koneksi,$query);
        
        if (mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: user.php');
        }
        else{
            //array_push($errors,"The Username or Password doesn't match");
            echo "<script>alert('username atau password salah')</script>";
        }            
    }
    
}
