<!doctype html>
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
    <title>LOLIVIA</title>
  </head>
  <body>
  <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
    ?>
    
      <div class="kontainer">
        <div class="konten">
        <p></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

          <h1>LOLIVIA</h1>
          <div class="nama">
            <span class="txt-rotate" data-period="100" data-rotate='[ "Lomba,", "Beasiswa,", "Forum Diskusi," ]'></span>
          </div>
        </div>
      </div>


  <div class="container">
  </br>
  <center><h2>DATA USER</h2></center>
	<br/>
  <div class="row justify-content-between">
    <div class="col-4">
      <a class="btn btn-primary"  href="tambah_form.php" role="button" >Tambah Data User</a>
    </div>
    <div class="col-1">
      <a class="btn btn-danger" href="logout.php" role="button" >logout</a>
    </div>
  </div>
	<br/>

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
    <?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
		?>

  </thead>
  <tbody>
    <tr>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td>
          <a class="btn btn-primary" href="edit.php?id=<?php echo $d['id']; ?>" role="button">Edit</a>
          <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
				</td>
    </tr>
  </tbody>
  <?php 
		}
		?>
</table>

  </div>


  <div id="section4">
        <ul>
        <li><img src="aset/LOGO.png"></li>
        <li>&copy; 2020 LOLIVIA</li>
        </ul>
    </div>

    <a href="#" class="to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- Optional JavaScript -->
    <!--own-->
    <script src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
  </body>
</html>