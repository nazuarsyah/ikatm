<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
      <div class="row">            
      <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
      <h4 class="card-title">TABEL USER</h4>
      <a href="<?php echo base_url()."page/add_user"; ?>"><button type="button" class="btn btn-success" name="submit">Tambah </button></a></br></br>

      <?php echo form_open('page/cari_user') ?>
        <input type="text" name="keyword" placeholder="cari.." required>
        <button type="submit" name="search_submit" class="btn btn-primary">Cari</button>
        <a href="<?php echo base_url()."page/tabel_user/"; ?>"><button type="button" class="btn btn-success" >Reset</button></a>
      <?php echo form_close() ?>
     
      <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <td bgcolor=silver align=center width="4%">Username</td>  
          <td bgcolor=silver align=center width="8%">Login</td>
          <td bgcolor=silver align=center width="8%">Status</td>
          </tr>
          </thead>       
     
        <?php foreach($products as $product) { ?>
        <?php
        if($product->status==1){
        $sts = 'Aktif';
        }else{
        $sts = "Tidak Aktif";
        } ?> 

        <tr>
          <td><?php echo $product->username ?></td>
          <td><?php echo $product->sts_login ?></td>
          <td><?php echo $sts ?></td>
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