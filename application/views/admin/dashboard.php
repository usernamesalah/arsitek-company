<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Welcome</h1>
		</div>
		<div class="section-body">
			<?php echo $this->session->flashdata('msg');?>
			<div class="row">
				<!-- <div class="col-12">
					<h4>Selamat Datang Di Portal Pendaftaran Bujang Gadis Palembang 2020</h4>
				</div> -->
				<div class="col-12 mb-4">
					<div class="hero bg-primary text-white">
						<div class="hero-inner">
							<h2>Selamat Datang Di Portal Admin Pendaftaran Bujang Gadis Palembang</h2>
							<p class="lead">Mari Lihat Siapa Saja Yang Sudah Mendaftarkan Diri sebagai Peserta</p>
							<div class="mt-4">
								<a href="<?= base_url('admin/peserta') ?>" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-eye"></i> Lihat</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>