<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
      <div class="row">            
      <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
      <h1 class="card-title">RAPAT BARU</h1>
      <div class="table-responsive">
      <form id="formCheck" method="POST" action="<?php echo base_url()."page/do_insert_rapat"; ?>" enctype="multipart/form-data" >
      Tgl. Rapat : <input type="date" name="tgl_rapat" class="form-control" required>
      Judul Rapat : <input type="text" name="judul_rapat" class="form-control" required></br>
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="1%">NAMA</th>
          <th width="1%">JABATAN</th>
          <th width="1%">INSTANSI</th>
          <th><input type="checkbox" id="select-all" >  CEK</th>
        </tr>
      </thead>       
     
        <?php 
        if( ! empty($data->result())){
        foreach($data->result() as $pegawai) 
        { ?>


        <tr>
          <td><?php echo $pegawai->nama_lengkap ?></td>
          <td><?php echo $pegawai->jabatan ?></td>
          <td><?php echo $pegawai->instansi ?></td>
          <td><input type="checkbox" name="id_pegawai[]" value="<?php echo $pegawai->id_pegawai ?>"></td>
          <td align="left">
          </td>
        </tr>
        <?php
            echo "</tr>";
              }
            }else{ // Jika data tidak ada
              echo "<tr><td colspan='4'>Tidak ada data pegawai..</td></tr>";
            }
            ?>
      </table></br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url()."page/tabel_rapat" ?>"><button type="button" class="btn btn-secondary" >Kembali</button></a>
                    </form>
      <div>
    	<div>
    		<?php echo $pagination; ?>
    	</div>
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
<script>
$(document).ready(function(){
  $("#formCheck #select-all").click(function(){
    $("#formCheck input[type='checkbox']").prop('checked',this.checked);
  });
});
</script>
</html>