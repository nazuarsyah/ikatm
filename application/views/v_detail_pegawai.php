<?php $this->load->view('menu_admin') ?>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INFO PERSONAL</h4>
                  <div class="col-12 grid-margin">
	              <div class="card">
	              	<div class="foto">
	              	<img src="<?php echo base_url()."assets/images/foto_pegawai/$foto"?>" alt="Tidak Ada Foto" width="200" height="240" />
	              	</div>
	                <div class="card-body">
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Kode Kantor</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$nama_kantor" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nama Nomor Induk</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$nama_no_induk" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>	                      
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nomor Induk</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$no_induk" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">No. KTP</label>
	                          <div class="col-sm-7">
	                            <input type="text" name="no_induk" value="<?php echo "$no_ktp" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nama</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$nama_lengkap" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Tempat Lahir</label>
	                          <div class="col-sm-7">
	                           <input type="text" value="<?php echo "$tempat_lahir" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Tgl. Lahir</label>
	                          <div class="col-sm-7">
	                            <input type="date" value="<?php echo "$tgl_lahir" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
	                          <div class="col-sm-7">
	                          <input type="text" value="<?php echo "$jenis_kelamin" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Agama</label>
	                          <div class="col-sm-7">
	                          <input type="text" value="<?php echo "$agama" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Status Sipil</label>
	                          <div class="col-sm-7">
	                          <input type="text" value="<?php if($sts_sipil=="NIKAH"){echo "NIKAH";}if($sts_sipil=="BELUM_NIKAH"){echo "BELUM NIKAH";}  ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Alamat</label>
	                          <div class="col-sm-7">
	                            <textarea type="text" rows="4" class="form-control" readonly /><?php echo "$alamat" ?></textarea>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Pendidikan</label>
	                          <div class="col-sm-7">
	                          <input type="text" value="<?php echo "$pendidikan" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Jurusan</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$jurusan" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nomor HP</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$no_hp" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">NPWP</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$npwp" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nama Bank</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$nama_bank" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nama Pemilik Rek.</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$atas_nama_rek" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">No. Rekening</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$no_rekening" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Tgl. Masuk</label>
	                          <div class="col-sm-7">
	                            <input type="date" value="<?php echo "$tgl_masuk" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Divisi</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$divisi" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                  	<div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Jabatan</label>
	                          <div class="col-sm-7">
	                            <input type="text" value="<?php echo "$jabatan" ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Status Data</label>
	                          <div class="col-sm-7">
	                          <input type="text" value="<?php if($sts_data==1){echo "AKTIF";}if($sts_data==0){echo "TIDAK AKTIF";}  ?>" class="form-control" readonly />
	                          </div>
	                        </div>
	                      </div>
	                  	</div>
	                  <hr>	  


      <h4 class="card-title">RIWAYAT PEKERJAAN</h4>
      <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="1%">Nama Perusahaan</th>
          <th width="1%">Bagian</th>
          <th width="8%">Jabatan</th>
          <th width="8%">Dari Tgl.</th>
          <th width="8%">S/D. Tgl</th>
          </tr>
          </thead>       
     
	      <?php foreach($data->result() as $product) { ?>

        <tr>
          <td><?php echo $product->nama_perusahaan ?></td>
          <td><?php echo $product->bagian ?></td>
          <td><?php echo $product->jabatan ?></td>
          <td><?php echo date('d-m-Y',strtotime($product->tgl_mulai)) ?></td>
          <td><?php echo date('d-m-Y',strtotime($product->tgl_akhir)) ?></td>
        </tr>
      <?php 
      }
      ?>
      </table>
	   <a href="<?php echo base_url()."page/tabel_pegawai/"; ?>"><button type="button" class="btn btn-success" >Kembali</button></a>
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