<?php include("server.php"); ?>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>

  <div class="main">
    <p class="sign" align="center">Daftar</p>

    <form method="POST" action="register.php">
    <?php include('errors.php'); ?>

    <input class="un" type="text" align="center" name="username"  placeholder="Username .." required="required">
    <input class="pass" type="password" align="center" name="password"  placeholder="Password .." required="required">
    <input type="submit" class="submit" name="register" value="Daftar">

    <br/>
    <br/>
    
    <p align="center" >
        Sudah memiliki akun ? <a href="login.php" >Login</a>
        </p>
    </div>
     
</body>

</html>