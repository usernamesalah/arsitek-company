<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTabless/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Peserta</h1>
			<div class="section-header-breadcrumb">
				<a class="btn btn-primary mr-1 text-right" href="<?= base_url('admin/tambah_peserta') ?>">Tambah Data</a>
			</div>
		</div>
		<div class="section-body">
			<?php echo $this->session->flashdata('msg');?>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped" id="table-1">
									<thead>
										<tr>
											<!-- <th nowrap>No.</th> -->
											<th nowrap>Username</th>
											<th nowrap>Nama Lengkap</th>
											<!-- <th nowrap>Nama Panggilan</th>
											<th nowrap>Jenis Kelamin</th>
											<th nowrap>Status</th>
											<th nowrap>Tempat & Tanggal Lahir</th>
											<th nowrap>Tinggi Badan</th>
											<th nowrap>Berat Badan</th>
											<th nowrap>Alamat</th>
											<th nowrap>Kota</th>
											<th nowrap>Kode Pos</th>
											<th nowrap>No. Telepon</th>
											<th nowrap>Email</th>
											<th nowrap>Pendidikan Terakhir</th>
											<th nowrap>Nama sekolah/perguruan tinggi</th>
											<th nowrap>Jurusan</th>
											<th nowrap>Hobi</th>
											<th nowrap>Twitter</th>
											<th nowrap>Facebook</th>
											<th nowrap>Instagram</th>
											<th nowrap>Nama Ayah</th>
											<th nowrap>Pekerjaan Ayah</th>
											<th nowrap>Nama Ibu</th>
											<th nowrap>Pekerjaan Ibu</th>
											<th nowrap>Pekerjaan</th>
											<th nowrap>Nama Kantor</th>
											<th nowrap>Alamat Kantor</th>
											<th nowrap>Telepon Kantor</th> -->
											<th nowrap>Tanggal Daftar</th>
											<th nowrap>Aksi</th>
											<th nowrap>Resend Email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php $i = 0; foreach($peserta as $row): ?>
											<!-- <td nowrap><?= ++$i ?></td> -->
											<td nowrap><?=$row->username?></td>
											<td nowrap><?=$row->nama_lengkap?></td>
											<!-- <td nowrap><?=$row->nama_panggilan?></td>
											<td nowrap><?=$row->jenis_kelamin?></td>
											<td nowrap><?=$row->status?></td>
											<td nowrap><?=$row->ttl?></td>
											<td nowrap><?=$row->tinggi?></td>
											<td nowrap><?=$row->berat?></td>
											<td nowrap><?=$row->alamat?></td>
											<td nowrap><?=$row->kota?></td>
											<td nowrap><?=$row->kodepos?></td>
											<td nowrap><?=$row->hp?></td>
											<td nowrap><?=$row->email?></td>
											<td nowrap><?=$row->pendidikan?></td>
											<td nowrap><?=$row->instansi?></td>
											<td nowrap><?=$row->jurusan?></td>
											<td nowrap><?=$row->hobi?></td>
											<td nowrap><?=$row->twitter?></td>
											<td nowrap><?=$row->facebook?></td>
											<td nowrap><?=$row->instagram?></td>
											<td nowrap><?=$row->nama_ayah?></td>
											<td nowrap><?=$row->pekerjaan_ayah?></td>
											<td nowrap><?=$row->nama_ibu?></td>
											<td nowrap><?=$row->pekerjaan_ibu?></td>
											<td nowrap><?=$row->pekerjaan?></td>
											<td nowrap><?=$row->nama_kantor?></td>
											<td nowrap><?=$row->alamat_kantor?></td>
											<td nowrap><?=$row->telp_kantor?></td> -->
											<td nowrap><?=$this->tanggal->convert_date($row->created_at) ?></td>
											<td>
												<a href="<?= base_url('admin/detail_peserta?username='.str_replace(" ", "-", $row->username)) ?>" class="btn btn-primary">Detail</a>
												<!-- <button class="btn btn-danger" id="swal-6" onclick="hapus('<?= $row->username ?>');">Hapus</button> -->

												<a href="<?=base_url('admin/peserta?delete=true&username=' . $row->username) ?>" class="btn btn-danger">Hapus</a>	
												<a href="<?= base_url('admin/reset_password?username='.str_replace(" ", "-", $row->username)) ?>" class="btn btn-success">Reset Password</a>
											</td>
											<td nowrap>
											<a href="<?=base_url('admin/resend_email?email=' . $row->email . '&id=' . $row->id) ?>" class="btn btn-danger">Resend Email</a>	
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="<?php echo base_url(); ?>assets/modules/datatables/DataTabless/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script> -->
	<script type="text/javascript">
			$(document).ready(function() {
				$('#datatables').dataTable({
					"scrollX": true,
					"ordering": false,
					dom: 'Bfrtip',
					responsive: true,
					buttons: [
					'excel'
					]
				});
			});
			function hapus(username){
				
		        swal({
			      title: 'Are you sure?',
			      text: 'Once deleted, you will not be able to recover this imaginary file!',
			      icon: 'warning',
			      buttons: true,
			      dangerMode: true,
			    })
			    .then((willDelete) => {
			      if (willDelete) {
			      	$.post('<?= base_url('admin/peserta') ?>', {delete: true, username: username})
		                .done(function(response) {
		                	swal('Poof! Your imaginary file has been deleted!', {
						        icon: 'success',
						      });
		                    location.reload();
							log.console(response)
		                });
			      
			      } else {
			      swal('Your imaginary file is safe!');
			      }
			    });
			}
	</script>