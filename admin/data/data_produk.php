<h2>Data Produk</h2>

<!-- Button trigger modal -->
<!--  --><br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetak">
  Tambah Data Produk
</button><br><br>

<div class="table-responsive">
<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Jenis Produksi</th>
      <th>Nama Produk</th>
      <th>Foto</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM produk order by id_produk DESC"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['jenis_produksi']; ?></td>
      <td> <?php echo $pecah['nama_produk']; ?></td>
      
           <td>
             <a href="#" data-toggle="modal" data-target="#detail-transaksi-<?php echo $pecah['id_produk']; ?>">
           <img src="../img/produk/<?php echo $pecah['foto']; ?>" width="100px" height="100px">
          </a></td>
          <td> <?php echo $pecah['keterangan']; ?></td>
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-<?php echo $pecah['id_produk']; ?>">
          Edit
        </button> || 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?php echo $pecah['id_produk']; ?>">
          Delete
        </button>
      </td>
    </tr>
    <?php $nomor++ ?>



<div id="detail-transaksi-<?php echo $pecah['id_produk']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Foto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <img src="../img/produk/<?php echo $pecah['foto']; ?>" width="500px" height="500px">
     </div>   
 </div>
</div>
</div>


<!-- delete data -->

<div class="modal fade" id="delete-<?php echo $pecah['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
          Apakah Anda Yakin Ingin Menghapus Data Ini!<br>
        <a href="index.php?hal=hapus_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=data_produk" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>

<!-- edit data -->
<div class="modal fade" id="edit-<?php echo $pecah['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=edit_produk" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_produk" value="<?php echo $pecah['id_produk'] ?>">
           <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label for="exampleInputPassword1">Jenis Produk</label>
             <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
             <select class="custom-select mr-sm-2" name="jenis_produksi" id="inlineFormCustomSelect">
               <option value="0" selected disabled="true">--Pilih Jenis Produksi--</option>
               <?php 
               $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
               while ($data_kat = mysqli_fetch_array($q_kategori)) {
                 ?>
                 <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
               <?php } ?>
             </select>
           </div></div>
          <div class="form-group">
            <label for="usr">Nama Produk</label>
            <input type="text" class="form-control" id="usr" name="nama_produk" placeholder="Masukkan nama produk" value="<?php echo $pecah['nama_produk']; ?>">
          </div>
          <div class="form-group">
            <div class="col-4">
              <label for="exampleFormControlFile1">Foto Produk</label>
              <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" value="<?php echo $pecah['foto']; ?>">
            </div>
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pecah['keterangan']; ?>"><?php echo $pecah['keterangan']; ?></textarea>
            </div>
          
       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   

        </div>
        <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


    <?php } ?>
  </tbody>
</table>
</div>

<!-- TAMBAH PRODUK -->

<div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=tambah_produk" method="post" enctype="multipart/form-data">
          <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label for="exampleInputPassword1">Jenis Produk</label>
             <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
             <select class="custom-select mr-sm-2" name="jenis_produksi" id="inlineFormCustomSelect">
               <option value="0" selected disabled="true">--Pilih Jenis Produksi--</option>
               <?php 
               $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
               while ($data_kat = mysqli_fetch_array($q_kategori)) {
                 ?>
                 <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
               <?php } ?>
             </select>
           </div></div>
          <div class="form-group">
            <label for="usr">Nama Produk</label>
            <input type="text" class="form-control" id="usr" name="nama_produk">
          </div>
          <div class="form-group">
            <div class="col-4">
              <label for="exampleFormControlFile1">Foto Produk</label>
              <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
            </div>
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
         
          
       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   

        </div>
        <div class="modal-footer">
      </div>
    </div>
  </div>
</div>  


  <script type="text/javascript">
  $(document).ready(function() {
    $('#table_berita').DataTable();
} );

</script>

