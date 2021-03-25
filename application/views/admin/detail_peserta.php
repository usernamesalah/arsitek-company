<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Detail Peserta</h1>
			<!-- <div class="section-header-breadcrumb">
              <a class="btn btn-primary mr-1 text-right" href="<?= base_url('peserta/update_profil') ?>">Edit Profil</a>
            </div> -->
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card profile-widget">
						<div class="profile-widget-header">
							<img alt="image" src="<?= base_url('assets/foto/' . $this->session->userdata('username') . '.jpg') ?>" class="thumbnail profile-widget-picture" onerror="this.src='https://placehold.it/400x600';">
							<div class="profile-widget-items">
		                      <div class="profile-widget-item">
		                        <div class="profile-widget-item-value">Data Diri Peserta</div>
		                      </div>
		                    </div>
						</div>
						<div class="card-body">
							
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Memiliki KTP Palembang ?</label>
								<div class="col-sm-9">
									<!-- <label class="custom-switch mt-2">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="cek">
										<span class="custom-switch-indicator"></span>
									</label> -->
									<div class="custom-control custom-radio custom-control-inline">
				                      <input type="radio" id="customRadioInline1" name="ktp_palembang" value="ya" class="custom-control-input" <?= ($data->ktp_palembang == 'ya') ? 'checked' : '' ?> disabled>
				                      <label class="custom-control-label" for="customRadioInline1">Ya</label>
				                    </div>
				                    <div class="custom-control custom-radio custom-control-inline">
				                      <input type="radio" id="customRadioInline2" name="ktp_palembang" value="tidak" class="custom-control-input" <?= ($data->ktp_palembang != 'ya') ? 'checked' : '' ?> disabled>
				                      <label class="custom-control-label" for="customRadioInline2">Tidak</label>
				                    </div>
								</div>
							</div>
							<!-- <div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Foto</label>
								<div class="col-sm-9">
									<div class="custom-file">
				                      <input type="file" class="custom-file-input" id="customFile">
				                      <label class="custom-file-label" for="customFile">Pilih Foto</label>
				                    </div>
								</div>
							</div> -->
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Identitas</label>
								<div class="col-sm-9">
									<?= $data->no_kitas ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<?= $data->nama_lengkap ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panggilan</label>
								<div class="col-sm-9">
									<?= $data->nama_panggilan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-9">
									<?= ($data->jenis_kelamin == 'L') ?  'Laki Laki' : 'Perempuan' ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
								<div class="col-sm-9">
									<?= $data->status ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Tempat,Tanggal Lahir</label>
								<div class="col-sm-9">
									<?= $data->ttl ?>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Tinggi Badan</label>
									<?= $data->tinggi ?> CM
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Berat Badan</label>
									<?= $data->berat ?> KG
								</div>
							</div>
							<!-- <div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Ukuran Baju</label>
								<div class="col-sm-9">
									<?= $data->ukuran_baju ?>
								</div>
							</div> -->
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
								<div class="col-sm-9">
									<p><?= $data->alamat ?></p>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Kecamatan</label>
								<div class="col-sm-9">
									<?= $data->kecamatan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Kota</label>
								<div class="col-sm-9">
									<?= $data->kota ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Kode Pos</label>
								<div class="col-sm-9">
									<?= $data->kodepos ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
								<div class="col-sm-9">
									<?= $data->hp ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
								<div class="col-sm-9">
									<?= $data->email ?>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
								<div class="col-sm-9">
									<?= $data->pendidikan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Sekolah / Perguruan Tinggi</label>
								<div class="col-sm-9">
									<?= $data->instansi ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jurusan</label>
								<div class="col-sm-9">
									<?= $data->jurusan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Hobi</label>
								<div class="col-sm-9">
									<?= $data->hobi ?>
								</div>
							</div>
							<div class="section-title mt-0">Sosial Media ( Optional )</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Twitter</label>
									<?= $data->twitter ?>
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Facebook</label>
									<?= $data->facebook ?>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Instagram</label>
									<?= $data->instagram ?>
								</div>
							</div>
							<div class="section-title mt-0">Data Orang Tua</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ayah</label>
								<div class="col-sm-9">
									<?= $data->nama_ayah ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-9">
									<?= $data->pekerjaan_ayah ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu</label>
								<div class="col-sm-9">
									<?= $data->nama_ibu ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-9">
									<?= $data->pekerjaan_ibu ?>
								</div>
							</div>
							<div class="section-title mt-0">Data Pekerjaan ( Isi Jika Bekerja )</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-9">
									<?= $data->pekerjaan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
								<div class="col-sm-9">
									<?= $data->nama_kantor ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama / Alamat Kantor</label>
								<div class="col-sm-9">
									<p><?= $data->alamat_kantor ?></p>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Telpon Kantor</label>
								<div class="col-sm-9">
									<?= $data->telp_kantor ?>
								</div>
							</div>
						</div>
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