<?php $this->load->view('menu_admin') ?>

<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">User Baru</h4>
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<form method="POST" action="<?php echo base_url() . "page/do_insert_user"; ?>" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-4 col-form-label">Username</label>
													<div class="col-sm-7">
														<input name="username" type="text" class="form-control" required />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-4 col-form-label">Password</label>
													<div class="col-sm-7">
														<input type="password" name="password" class="form-control" required />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-4 col-form-label">Nama Lengkap</label>
													<div class="col-sm-7">
														<input type="text" name="nama" class="form-control" required />
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
															echo "<option value="1" echo>Aktif </option>";
															echo "<option value="0" echo>Tidak Aktif </option>";
														</select>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-success mr-2">Simpan</button>
										<a href="<?php echo base_url() . "page/tabel_user/"; ?>"><button type="button" class="btn btn-light">Batal</button></a>
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

</html>