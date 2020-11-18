<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">

    <title>Kontak</title>
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
                    <a class="nav-link text-white" href="tentang.html">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="kontak.php">Kontak</a>
                </li>

            </ul>

            <li class="nav-item ml-right">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control bd mr-sm-2" type="search" placeholder="Search">
                <button class="btn bdb my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="kontainer d-flex justify-content-center">
        <div class="card bg-light mb-3" style="width: 60%;">
            <div class="card-header">
                <div id="peringatan" class="alert alert-success d-none" role="alert">Terimakasih atas pesan anda<br>Email Behasil Dikirim</div>
                <h2 style="color: grey;">Kontak kami melalui form berikut ini</h2>
            </div>
            <div class="card-body text-left">
                <form id="myForm">
                    <input id="subject" type="hidden" value="Email user LOLIVIA">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone (Opsional)">
                    </div>
                    <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" rows="3"></textarea>
                    <button type="button" class="btn btn-primary mt-2" onclick="sendEmail()" value="Send An Email">Kirim</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#nama");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#pesan");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        document.getElementById("peringatan").className = "alert alert-success";
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>