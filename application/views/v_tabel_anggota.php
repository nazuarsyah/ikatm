<?php $this->load->view('menu_admin') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">TABEL ANGGOTA</h4>
            <a href="<?php echo base_url() . "page/add_anggota"; ?>"><button type="button" class="btn btn-success" name="submit">Tambah</button></a></br></br>

            <?php if ($error = $this->session->flashdata('msg')) { ?>
              <div class="alert alert-success" id="msg">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php echo $error; ?> <strong>Berhasil!</strong>
              </div>
            <?php } ?>

            <?php echo form_open('page/cari_anggota') ?>
            <input type="text" name="keyword" placeholder="cari.." required>
            <button type="submit" name="search_submit" class="btn btn-primary">Cari</button>
            <?php echo form_close() ?>

            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th width="1%">NAMA</th>
                    <th>AKSI</th>
                  </tr>
                </thead>

                <?php foreach ($data->result() as $pegawai) { ?>
                  <tr>
                    <td><?php echo $pegawai->nama_lengkap ?></td>
                    <td align="left">
                      <a href="<?php echo base_url() . "page/update_anggota/" . $pegawai->id_anggota ?>"><button type="submit" class="btn btn-warning mr-2">Edit</button></a>
                      <a href="<?php echo base_url() . "page/do_delete_anggota/" . $pegawai->id_anggota ?>"><button type="submit" class="btn btn-danger mr-2 hapus">Hapus</button></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </table></br>
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
      <script src="<?php echo base_url() . "assets/vendors/js/vendor.bundle.base.js" ?>"></script>
      <script src="<?php echo base_url() . "assets/vendors/js/vendor.bundle.addons.js" ?>"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="<?php echo base_url() . "assets/js/off-canvas.js" ?>"></script>
      <script src="<?php echo base_url() . "assets/js/misc.js" ?>"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <!-- End custom js for this page-->
      </body>
      <script>
        $(document).ready(function() {
          $('.hapus').click(function() {
            return confirm("Anda yakin ingin menghapus data?");
          });
        });

        $(function() {
          $('[data-toggle="tooltip"]').tooltip()
        })
      </script>

      </html>