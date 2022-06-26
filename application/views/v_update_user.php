<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4>
                  <div class="col-12 grid-margin">
	              <div class="card">
	                <div class="card-body">
	                  <form method="POST" action="<?php echo base_url()."page/do_update_user"; ?>" enctype="multipart/form-data" >
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">ID</label>
	                          <div class="col-sm-7">
	                            <input name="id_user" type="text" value="<?php echo $id_user ?>" class="form-control" readonly="" />
	                          </div>
	                        </div>
	                      </div>	                      
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Kode Kantor</label>
	                          <div class="col-sm-7">
	                            <select name="kode_kantor" class="form-control">
	                              echo "<option value="001"  <?php if($kode_kantor=="001"){ echo "selected";} ?> echo >001 </option>";
								  echo "<option value="002"  <?php if($kode_kantor=="002"){ echo "selected";} ?> echo >002 </option>";
								  echo "<option value="003"  <?php if($kode_kantor=="003"){ echo "selected";} ?> echo >003 </option>";
								  echo "<option value="004"  <?php if($kode_kantor=="004"){ echo "selected";} ?> echo >004 </option>";
								  echo "<option value="005"  <?php if($kode_kantor=="005"){ echo "selected";} ?> echo >005 </option>";
								  echo "<option value="006"  <?php if($kode_kantor=="006"){ echo "selected";} ?> echo >006 </option>";
								  echo "<option value="007"  <?php if($kode_kantor=="007"){ echo "selected";} ?> echo >007 </option>";
								  echo "<option value="008"  <?php if($kode_kantor=="008"){ echo "selected";} ?> echo >008 </option>";
								  echo "<option value="009"  <?php if($kode_kantor=="009"){ echo "selected";} ?> echo >009 </option>";
								  echo "<option value="010"  <?php if($kode_kantor=="010"){ echo "selected";} ?> echo >010 </option>";
	                            </select>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Username</label>
	                          <div class="col-sm-7">
	                            <input name="username" type="text" value="<?php echo $username ?>" class="form-control" required/>
	                          </div>
	                        </div>
	                      </div>	                      
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nama Lengkap</label>
	                          <div class="col-sm-7">
	                            <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" required />
	                          </div>
	                        </div>
	                      </div>
	                  </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Status User</label>
	                          <div class="col-sm-7">
	                            <select name="sts_user" class="form-control">
	                              echo "<option value="1"  <?php if($sts_user==1){ echo "selected";} ?> echo >Aktif </option>";
								  echo "<option value="0"  <?php if($sts_user==0){ echo "selected";} ?> echo >Tidak Aktif </option>";
	                            </select>
	                          </div>
	                        </div>
	                      </div>
	                    </div>    					
	                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
	                  <a href="<?php echo base_url()."page/tabel_user/"; ?>"><button type="button" class="btn btn-secondary" >Batal</button></a>
	                  </form>
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