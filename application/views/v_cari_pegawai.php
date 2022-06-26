<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
      <div class="row">            
      <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
      <h4 class="card-title">TABEL PEGAWAI</h4>
      <a href="<?php echo base_url()."page/add_pegawai"; ?>"><button type="button" class="btn btn-success" name="submit">Tambah</button></a></br></br>

      <?php echo form_open('page/cari_pegawai') ?>
        <input type="text" name="keyword" placeholder="cari.." required>
        <button type="submit" name="search_submit" class="btn btn-primary">Cari</button>
        <a href="<?php echo base_url()."page/tabel_pegawai/"; ?>"><button type="button" class="btn btn-success" >Reset</button></a>
      <?php echo form_close() ?>
     
      <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="1%">NAMA</th>
          <th width="1%">JABATAN</th>
          <th width="1%">INSTANSI</th>
          <th>AKSI</th>
          </tr>
          </thead>       
     
	      <?php foreach($products as $pegawai) { ?>

        <tr>
          <td><?php echo $pegawai->nama_lengkap ?></td>
          <td><?php echo $pegawai->jabatan ?></td>
          <td><?php echo $pegawai->instansi ?></td>
          <td align="left">
          <a href="<?php echo base_url()."page/do_delete_pegawai/".$pegawai->id_pegawai ?>"><button type="submit" class="btn btn-danger mr-2 hapus">Hapus</button></a> 
          </td>
        </tr>
      <?php 
      }
      ?>
      </table>
      <div>
    </div>
  </div>
<!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <?php $this->load->view('footer_admin') ?>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url()."assets/vendors/js/vendor.bundle.base.js" ?>"></script>
  <script src="<?php echo base_url()."assets/vendors/js/vendor.bundle.addons.js" ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url()."assets/js/off-canvas.js" ?>"></script>
  <script src="<?php echo base_url()."assets/js/misc.js" ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>