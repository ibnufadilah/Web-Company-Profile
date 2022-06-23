<h2>Selamat Datang Admin <?php echo $_SESSION['admin']['username']; ?></h2>
<br><br>
<div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="fa fa-home fa-3x"></i>
            <div class="info">
              <h4>Data Produk</h4>
              <?php 
              $q1 = mysqli_query($koneksi,"SELECT *FROM produk");
               $count1 = mysqli_num_rows($q1)
               ?>
              <p><b><?php echo $count1; ?></b></p>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Data Admin</h4>
              <?php 
              $q1 = mysqli_query($koneksi,"SELECT *FROM admin");
               $count1 = mysqli_num_rows($q1)
               ?>
              <p><b><?php echo $count1; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="fa fa-database fa-3x"></i>
            <div class="info">
              <h4>Jenis Produksi</h4>
              <?php 
              $q1 = mysqli_query($koneksi,"SELECT *FROM jenis_produksi");
               $count1 = mysqli_num_rows($q1)
               ?>
              <p><b><?php echo $count1; ?></b></p>
            </div>
          </div>
        </div>
         