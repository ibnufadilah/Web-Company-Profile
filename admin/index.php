<?php
    //account dimasukkan kedalam session
    session_start();
    
    $koneksi = new mysqli("localhost","root","","narumaki");

    //harus login
    if (!isset($_SESSION['admin'])) {
        echo "<script> alert('Anda Belum Login, Silahkan Tekan Ok Untuk Login'); </script>";
        echo "<script> location='login.php'; </script>";
        exit();
    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. NARUMAKI ADMIN</title>
     <link href="../assets/img/logo1.png" rel="icon">
 <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <link rel="icon" type="image/png" href="../img/bogor.png">

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   
    <script src="assets/js/jquery-3.3.1.min.js"></script>

      <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

   <link rel="stylesheet" type="text/css" href="assets/js/dataTables/dataTables.bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/js/dataTables/jquery.dataTables.css">
   <script type="text/javascript" src="assets/js/dataTables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/js/dataTables/dataTables.bootstrap.js"></script>
   

  
    

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administration</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"></a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="assets/img/user.jpg" class="user-image img-responsive"/>
          </li>
            
          
                    <li><a href="index.php"><i class="fa fa-university "></i> Dashboard</a></li>
                    <li><a href="index.php?hal=data_produk"><i class="fa fa-newspaper-o "></i> Data Produk</a></li>
                     <li><a href="index.php?hal=data_admin"><i class="fa fa-newspaper-o "></i> Data Admin</a></li>
                     <li><a href="index.php?hal=jenis_produksi"><i class="fa fa-newspaper-o "></i> Jenis Produksi</a></li>
                     <li><a href="index.php?hal=galeri"><i class="fa fa-newspaper-o "></i> Galeri</a></li>
                    <li><a href="index.php?hal=logout"><i class="fa fa-sign-out"></i> Logout</a></li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php  
                    if (isset($_GET['hal'])) {
                        if ($_GET['hal']=="data_produk") {
                            include 'data/data_produk.php';
                        }
                        elseif ($_GET['hal']=="data_admin") {
                            include'data/data_admin.php';
                        }
                         elseif ($_GET['hal']=="jenis_produksi") {
                            include'data/jenis_produksi.php';
                        }
                        elseif ($_GET['hal']=="tambah_produk") {
                            include 'data/tambah_produk.php';
                        }
                        elseif ($_GET['hal']=="edit_produk") {
                            include 'data/edit_produk.php';
                        }
                        elseif($_GET['hal']=="hapus_produk") {
                            include 'data/hapus_produk.php';
                        }
                         elseif($_GET['hal']=="tambah_produksi") {
                            include 'data/tambah_produksi.php';
                        }
                        elseif($_GET['hal']=="edit_produksi") {
                            include 'data/edit_produksi.php';
                        }
                        elseif ($_GET['hal']=="hapus_produksi") {
                            include 'data/hapus_produksi.php';
                        }
                        elseif ($_GET['hal']=="tambah_admin") {
                            include 'data/tambah_admin.php';
                        }
                        elseif ($_GET['hal']=="edit_admin") {
                            include 'data/edit_admin.php';
                        }
                        elseif ($_GET['hal']=="galeri") {
                            include 'data/galeri.php';
                        }
                        elseif ($_GET['hal']=="edit_galeri") {
                            include 'data/edit_galeri.php';
                        }
                        elseif ($_GET['hal']=="hapus_galeri") {
                            include 'data/hapus_galeri.php';
                        }
                        elseif ($_GET['hal']=="tambah_galeri") {
                            include 'data/tambah_galeri.php';
                        }
                        elseif ($_GET['hal']=="logout") {
                            include 'logout.php';
                        }
                    }
                    else {
                        include'home.php';
                    }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   
</body>
</html>


   <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
      <!-- BOOTSTRAP SCRIPTS -->
  
