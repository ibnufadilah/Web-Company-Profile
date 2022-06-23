<?php 
include 'koneksi.php';
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
  <link rel="stylesheet" href="animasi/css/aos.css">
 
  <link rel="stylesheet" href="css/main.css" type="text/css">

<!-- Template Main CSS File -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <!-- <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> -->
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- AOS -->
    <script src="js/aos.js"></script>
    <!-- <script>
      AOS.init({
      });
    </script> -->
  <script type="text/javascript" src="script.js"></script>



  <!-- =======================================================
  * Template Name: Sailor - v2.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style type="text/css">
    .wafixed{
      position: fixed;
      right: 30px;
      bottom: 30px;
      z-index: 999;
    }
    .gal {
  -webkit-column-count: 4; /* Chrome, Safari, Opera */
    -moz-column-count: 4; /* Firefox */
    column-count: 4;
} 
.gal img{
  width: 100%; padding: 7px 0;
}

@media (max-width: 768px) {
  .gal {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
  }
}

@media (max-width: 500px) {
  .gal {
    -webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;
  }
}

    
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.php"><img src="assets/img/logo1.png" width="200px" height="50px"></a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
          <li><a href="login.php">Login</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      
      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>PT NARUMAKI</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/logo1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="zoom-in">
            <div class="content pt-4 pt-lg-0">
              <h3>Tentang Kami</h3>
              <blockquote class="text-justify">
              <p class="font-italic">
                PT. PENGXING Batu Indonesia adalah Perusahaan Swasta yang bergerak dibidang Konstruksi dan Perdagangan Besar. Dibentuk dengan Roh Pembangunan yang profesional, efektif, efisien dan inovatif. Perusahaan ini berdiri pada tanggal 28 November 2019 di Kabupaten Bogor berdasarkan akta notaris yang dibuat oleh Notaris YONSHA MINANDA, SH. MH. Juga telah terima persetujuan Mentri Hukum dan Hak Asasi Manusia Republik Indonesia melalui surat keputusan nomor : AHU – 0063778.AH.01.01.TAHUN 2019 Melalui surat keputusan tersebut perusahaan ditetapkan sebagai Perusahaan Persero yaitu menjadi PT. PENGXING Batu Indonesia. 
                PT. PENGXING Batu Indonesia merupakan perusahaan baru namun kiprah pendiri khususnya Direktur dalam hal ini ACHMAD FAUZI FATAH, SE dibidang kontruksi telah diawali sejak Tahun 2009. Baik sebagai Perorangan juga berkontribusi atau bergabung dalam lembaga tertentu.
              </p>
              </blockquote>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

      
<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <!-- <h2 class="text-center font-weight-bold my-5">Menjual segala jenis kebutuhan kontraktor</h2> -->
        <div class="section-title">
          <h2>PT NARUMAKI</h2>
          <p>Menjual Segala Jenis Kebutuhan Kontraktor</p>
        </div>

            
        <div class="form-group col-md-3">
         <h3>Pilih Kategori</h3>

         <select class="form-control" id="jenis_produksi">
           <option value="show-all" selected="selected">---ALL---</option>
           <?php 
           $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
           while ($data_kat = mysqli_fetch_array($q_kategori)) {
             ?>
             <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
             <?php } ?>
           </select>

         </div>
          
          <div id="data-product"> </div>
         


    </section><!-- End Portfolio Section -->

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Galery</h2>
          <p>Our Activity</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->
          </div>
        </div>

        

       

          
            
            <div class="container body">
           
                 <div class="gal">
             <?php $nomor=1; ?>
             <?php $ambil=$koneksi->query(" SELECT * FROM galeri order by id_galeri DESC"); ?>
             <?php while($pecah=$ambil->fetch_assoc()) { ?>
              <img src="img/produk/<?php echo $pecah['galeri']; ?>" class="img-fluid" alt="" data-aos="fade-up"  data-aos-duration="1000">
              <?php $nomor++ ?>
          <?php } ?>  
        </div>
            
             
           
            </div>
               
                 
         
    </section><!-- End Portfolio Section -->
      

  

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

  <a class="wafixed" href="https://wa.me/6285694297172" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x text-success"></i>
  <i class="admin/assets/font-awesome/fonts/fa fa-whatsapp "></i>
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