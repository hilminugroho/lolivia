<!doctype html>
<?php include("update.php"); ?>

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

    <title>Edit user</title>
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
          <h1>Ubah Data User</h1>  
      </div>

  <table class="table table-bordered">            
        <?php
            include 'koneksi.php';
            $cek_id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from user where id='$cek_id'");
            //var_dump($id);
            while($d = mysqli_fetch_array($data))
            {
		?>

        <form method="post" action="edit.php">
        <div class="container form-group">
            <label >Username</label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $d['username']; ?>">
        </div>
        <div class="container form-group">
            <label>Password</label>
            <input name="password" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $d['password']; ?>">
        </div>
        <div class="container text-center">
            <button type="submit" name="update" class="btn btn-primary">Ubah</button>
        </div>
        </form>

    <?php 
            }
            ?>
    </table>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

