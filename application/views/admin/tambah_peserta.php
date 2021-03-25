<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Update Profil</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<?= form_open_multipart('admin/tambah_peserta'); ?>
						<div class="card-header">
							<h4>Data Diri</h4>
						</div>
						<div class="card-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputEmail3" name="username">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="inputEmail3" name="password">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Ulangi Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="inputEmail3" name="password-confirm">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
							<!-- <button class="btn btn-primary">Simpan</button> -->
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<script>
	$(function(){
		console.log($('#customRadioInline1').val());
	});
	$('#customRadioInline1').change(function(){
		console.log($('#cek').val());
	});
</script>