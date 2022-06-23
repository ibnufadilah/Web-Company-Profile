<!DOCTYPE html>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">
    body{
      background-color: #ffba3b;
    }
    
  </style>
                      </head>
                      <body>
                      <div class="row about-us">
                            <?php 

                             include 'koneksi.php';

                                $action = $_REQUEST['action'];


                               if($action == "show-all"){

                               $query =  mysqli_query($koneksi,'SELECT * FROM produk order by id_produk DESC');
      
                                }
                               else{

                               $query =  mysqli_query($koneksi,"SELECT * FROM produk WHERE jenis_produksi ='$action' order by id_produk DESC");
     
                                }
                             while ($data = mysqli_fetch_array($query)) {
                              
                             ?>

                              <div class="py-5">
                                <section id="blog" class="blog">
      <div class="container">
      <div class="icon-box">
      <div class="row">
        <div class="col-md-12" style="">
          <div class="row">
            <div class="col-md-4" data-aos="fade-up"  data-aos-duration="1000">
              <!-- <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"> -->
                                    <img src="img/produk/<?php echo $data['foto']; ?>"  weight ="500" height="200">
              <h2><?php echo $data['nama_produk']; ?></h2>
            
          </div>
        
        <!-- bagian selayang pandang -->
        <div class="col-md-6">
          <p class="lead p-1 text-justify" data-aos="fade-left"><?php echo $data['keterangan']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


                            <?php } ?>
                      </div>


                   
                      </body>
                      </html>                      
    