	<main style="margin-top: 6%;">
		<style type="text/css">
			h4{padding: 2%; color: red;}
		</style>

		<div class="container margin_60">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="form_title">
						<h3><strong><i class="icon-pencil"></i></strong>Formulir Pendaftaran Bujang Gadis Palembang 2018</h3>
						<?= $this->session->flashdata('msg') ?>
					</div>
					<div class="step">

						<div id="message-contact"></div>
						<?=form_open('daftar')?>

							<div class="row">
								<h4>Data Diri</h4>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Memiliki KTP Palembang ?</label>
										<select name="ktp_palembang" class="form-control" required>
											<option hidden value="">-Pilih-</option>
											<option value="Ya">Ya</option>
											<option value="Tidak">Tidak</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nomor KTP/SIM/Identitas</label>
										<input type="text" class="form-control" name="no_kitas" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input type="text" class="form-control" name="nama_lengkap" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nama Panggilan</label>
										<input type="text" class="form-control" name="nama_panggilan" required>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Jenis Kelamin</label> <br>
										<input type="radio" value="Laki-Laki" name="jenis_kelamin"> Laki-Laki <br>
										<input type="radio" value="Perempuan" name="jenis_kelamin"> Perempuan <br>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Status</label>
										<select name="status" class="form-control" required>
											<option hidden value="">-Pilih-</option>
											<option value="Menikah">Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>
										</select>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Tempat & Tanggal Lahir</label>
										<input type="text" class="form-control" name="ttl" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Tinggi Badan</label>
										<div class="input-group">
											<input type="number" class="form-control" name="tinggi" required aria-describedby="basic-addon2">
										  	<span class="input-group-addon" id="basic-addon2">cm</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Berat Badan</label>
										<div class="input-group">
											<input type="number" class="form-control" name="berat" required aria-describedby="basic-addon2">
										  	<span class="input-group-addon" id="basic-addon2">kg</span>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Alamat Lengkap</label>
										<textarea class="form-control" name="alamat" required></textarea>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Kota</label>
										<input type="text" class="form-control" name="kota" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Kode Pos</label>
										<input type="text" class="form-control" name="kodepos" required>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Telepon Seluler</label>
										<input type="text" class="form-control" name="hp">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Twitter (jika ada)</label>
										<input type="text" class="form-control" name="twitter">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Facebook (jika ada)	</label>
										<input type="text" class="form-control" name="facebook">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Instagram (jika ada)</label>
										<input type="text" class="form-control" name="instagram">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Pendidikan Terakhir</label>
										<input type="text" class="form-control" name="pendidikan" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Sekolah/Perguruan Tinnggi</label>
										<input type="text" class="form-control" name="instansi" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Jurusan</label>
										<input type="text" class="form-control" name="jurusan" required>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Hobi</label>
										<input type="text" class="form-control" name="hobi" required>
									</div>
								</div>
							</div>

							<div class="row">
								<h4>Data Orang Tua</h4>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nama Ayah</label>
										<input type="text" class="form-control" name="nama_ayah" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Pekerjaan</label>
										<input type="text" class="form-control" name="pekerjaan_ayah" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nama Ibu</label>
										<input type="text" class="form-control" name="nama_ibu" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Pekerjaan</label>
										<input type="text" class="form-control" name="pekerjaan_ibu" required>
									</div>
								</div>
							</div>

							<div class="row">
								<h4>Data Pekerjaan (Jika ada wajib diisi)</h4>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Pekerjaan</label>
										<input type="text" class="form-control" name="pekerjaan" >
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nama Kantor</label>
										<input type="text" class="form-control" name="nama_kantor" >
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Telepon kantor</label>
										<input type="text" class="form-control" name="telp_kantor" >
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Alamat Kantor</label>
										<textarea class="form-control" name="alama_kantor"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<h4>Data Akun</h4>
								<p style="margin-left: 2%; color: blue;">Masukan username dan password yang diinginkan untuk mengakses laman dashboard</p>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" name="username" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Password</label>
										<input type="text" class="form-control" name="password" required>
									</div>
								</div>
							</div>

							<input type="submit" class="btn btn-success" value="Daftar" name="daftar">
						<?=form_close()?>
					</div>
				</div>
				<!-- End col-md-8 -->

				<div class="col-md-4 col-sm-4">
					<div class="box_style_1">
						<span class="tape"></span>
						<h4>Persyaratan <span><i class="icon-pin pull-right"></i></span></h4>
						<p>
							Pembukaan Pendaftaran Pemilihan Bujang Gadis Palembang Tahun 2018 Telah dibuka pada 12 Maret s/d 5 April 2018
						</p>
						<ul class="list_order">
							<li><span>1</span>Usia 16 s/d 25 tahun</li>
							<li><span>2</span>Belum Pernah Menikah</li>
							<li><span>3</span>Tinggi Badan Minimal Bujang 165 cm dan Gadis 160 cm</li>
							<li><span>4</span>Bebas Narkoba</li>
							<li><span>5</span>Memiliki Loyalitas dan Motivasi menjadi Duta Wisata Kota Palembang</li>
						</ul>
					</div>
					<!-- <div class="box_style_4">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Help?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div> -->
				</div>
				<!-- End col-md-4 -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->

	</main>
	<!-- End main -->
