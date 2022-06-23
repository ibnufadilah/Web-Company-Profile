<?php
  session_start();
  $koneksi = new mysqli("localhost","root","","narumaki");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT NARUMAKI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/aos.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<!--===============================================================================================-->  
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    


</head>
<body>
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.php"><img src="assets/img/logo1.png" width="200px" height="50px"></a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="login.php">Login</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <br><br> <br><br> <br><br>

      <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">Selalu Ingat username kamu</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success" name="login">Login</button>
  
</form>
 

    <!-- <section id="login">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(assets/img/slide/banner2.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                <div class="login100-form validate-form">
                    <form method="POST" >
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                   

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>
                    </form> -->
                     <?php
                                      if (isset($_POST['login'])) {
                                        $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[username]' AND password = '$_POST[password]'");
                                        $yangcocok = $ambil->num_rows;
                                        if ($yangcocok==1) {
                                          $_SESSION['admin'] = $ambil->fetch_assoc();
                                          echo "<div class='alert alert-info'>Login Berhasil</div>";
                                          echo "<meta http-equiv='refresh' content='1;url=admin/index.php'>";
                                        }
                                        else {
                                          echo "<div class='alert alert-danger'>Login Gagal</div>";
                                          echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                                        }
                                      }
                                      
                                    ?>
                </div>
                
            </div>
        </div>
    </div>
    </section>
     <br><br> <br><br>
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="footer-info">
              <h2>PT. NARUMAKI</h2>
              <p>
               JL. Raya Sudamanik Desa Rengasjajar Kec. Cigudeg<br>
                Kab. Bogor 16660 Jawa Barat<br><br>
                <strong>Phone:</strong> +6281387511499<br>
                <strong>Email:</strong> xibanesindonesia@gmail.com<br>
              </p>
              <div class="social-links mt-6">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href=" https://api.whatsapp.com/send?phone=6282114034243" class="facebook"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          
          
          <div class="col-6">
          <form id="myForm">
            <div class="form-group">
              <label >Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label >E-mail</label>
              <input type="text" class="form-control" id="email" placeholder="Masukkan E-mail">
            </div>
            <div class="form-group">
              <label >Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Masukkan Subject/Judul">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Pesan</label>
              <textarea class="form-control" name="pesan" id="body" rows="5"></textarea>
            </div>
            <button type="button" onclick="sendEmail()" class="btn btn-info btn-sm" value="Send An Email">Kirim E-mail</button>
          </form>
          <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script type="text/javascript">
            function sendEmail() {
              var name = $("#name");
              var email = $("#email");
              var subject = $("#subject");
              var body = $("#body");

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
                 }, success: function (response) {
                  $('#myForm')[0].reset();
                  $('.sent-notification').text("Message Sent Successfully.");
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


        </div>
      </div>
      </div>      
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PT. NARUMAKI</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  
</span></a>


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  
<link href="assets/css/style.css" rel="stylesheet">
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>



<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>