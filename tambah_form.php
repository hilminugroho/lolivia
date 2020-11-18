<!doctype html>
<?php include("tambah_user.php"); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">

    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Tambah user</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg">
        <a class="navbar-brand text-white" href="index.php">LOLIVIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pilihan Lomba
                </a>
                <div class="dropdown-menu bg" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item text-white" href="lombaakadem.html">Akademik</a>
                  <a class="dropdown-item text-white" href="lombadesain.html">Desain</a>
                </div>
              </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="bea2.html">Beasiswa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lainnya
                </a>
                <div class="dropdown-menu bg1" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-white" href="forumdiskusi.html">Forum</a>
                        <a class="dropdown-item text-white" href="berita.html">Berita</a>
                        <a class="dropdown-item text-white" href="inf.html">Infografis</a>
                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="tentang.html" >Tentang Kami</a>
            </li>
          
          </ul>

          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control bd mr-sm-2" type="search" placeholder="Search">
            <button class="btn bdb my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

      </nav>
      <div class="container text-center" >
          <h1>Tambah User</h1>  
      </div>


  <div class="container">

    <form method="post" action="tambah_form.php">
      <div class="form-group row">
        <label>Username</label>
        <input type="text" name="username" id="username" class="form-control" >
      </div>
      <div class="form-group row">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <button name="tambah" type="submit" class="btn btn-primary">Tambah</button>
    </form>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

