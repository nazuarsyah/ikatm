<script type="text/javascript">
    function jam() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);
</script>
<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Absensi</h4>
                  Jam : <span class="jam"></span>
                  <div class="col-12 grid-margin">
	              <div class="card">
	                <div class="card-body">
	                  <form method="POST" action="<?php echo base_url()."page/do_insert_absensi"; ?>" enctype="multipart/form-data" >   					
	                  <button type="submit" class="btn btn-success mr-2">Masuk</button>
	                  </button></a>
	                  </form>
	                  <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="1%">Tanggal Absen</th>
          <th width="1%">Masuk</th>
          <th width="8%">Keluar</th>
          <td></th>
          </tr>
          </thead>       
     
	      <?php foreach($data->result() as $absensi) { ?>

        <tr>
          <td><?php echo date('d-m-Y',strtotime($absensi->tgl_absen)) ?></td>        	
          <td><?php echo $absensi->jam_masuk ?></td>
          <td><?php echo $absensi->jam_pulang ?></td>
          <td align="center">
          <a href="<?php echo base_url()."page/update_absensi/".$absensi->id_absensi ?>"><button type="submit" class="btn btn-success mr-2">Pulang</button></a> 
          </td>
        </tr>
      <?php 
      }
      ?>
      </table></br>
      <div>
	                </div>
	              </div>
	             </div>                          
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

</html>