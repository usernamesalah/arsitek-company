<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<main>
	<div class="container" style="margin-top: 5%;">

		<div class="main_title" id="vote" style="margin-top: 0% !important;">
			<h2>Hasil <span>Voting</span> Sementara </h2>
			<!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
		</div>
		<div class="row" style="margin-top: 0% !important;">
			<div class="col-md-6" style="margin-top: 0% !important;">

				<div class="box_style_1 expose" style="margin: 0% !important; height: 800px;" id="grafikbujang">

				</div>
			</div>
			<div class="col-md-6" style="margin-top: 0%!important;">

				<div class="box_style_1 expose" style="margin: 0% !important; height: 800px;" id="gadis">

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
				<div class="widget">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container margin_60">

		<div class="main_title" id="vote" style="margin-top: 0% !important;">
			<h2>Finalis <span>Bujang</span> </h2>
		</div>

		<div class="row">

			<?php foreach ($finalist as $row) : ?>
				<?php
				$details = json_decode($row->details);
				if ($details->jenis_kelamin != 'l') {
					continue;
				}


				?>
				<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
					<div class="tour_container">
						<div class="ribbon_3 popular">
							<!-- <span>Popular</span> -->
						</div>
						<div class="img_container">
							<br>
							<br>
							<img src="<?= $admin_url . '/assets/voting/' . $poll_id . '/' . $details->foto[0] ?>" onerror="this.src = 'http://placehold.it/350';" class="img-responsive lazy" alt="image" style="height: 350px !important; margin: 0 auto !important;">
						</div>
						<div class="tour_title">
							<h3><strong><?= (isset($details->no_peserta)) ? $details->no_peserta : '000' ?><?= ' - ' . substr($details->nama, 0, 20) ?></strong></h3>
							
							<hr>
						</div>
					</div>
				</div>
			<?php endforeach; ?>


		</div>

		<hr>

		<div class="main_title" style="margin-top: 5%;">
			<h2>Finalis <span>Gadis</span> </h2>
		</div>

		<div class="row">

			<?php foreach ($finalist as $row) : ?>
				<?php
				$details = json_decode($row->details);
				if ($details->jenis_kelamin != 'p') {
					continue;
				}
				
				?>
				<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
					<div class="tour_container">
						<div class="ribbon_3 popular">
							<!-- <span>Popular</span> -->
						</div>
						<div class="img_container">
							<br>
							<br>
							<img src="<?= $admin_url . '/assets/voting/' . $poll_id . '/' . $details->foto[0] ?>" onerror="this.src = 'http://placehold.it/350';" class="img-responsive lazy" alt="image" style="height: 350px !important; margin: 0 auto !important;">
						</div>
						<div class="tour_title">
							<h3><strong><?= (isset($details->no_peserta)) ? $details->no_peserta : '000' ?><?= ' - ' . substr($details->nama, 0, 20) ?></strong></h3>
							
							<hr>
						</div>
					</div>
				</div>
			<?php endforeach; ?>


		</div>
		<!-- End row -->

		<!-- <div class="main_title" style="margin-top: 0% !important;">
				<h2>Tersedia Juga E-Voting Versi <span>Mobile</span></h2>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.1s">
					<center>
						<a href='https://play.google.com/store/apps/details?id=com.puding_e_voting&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Temukan di Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/id_badge_web_generic.png'/></a>
					</center>
				</div>
			</div> -->

	</div>
	<!-- End container -->

</main>
<!-- End main -->


<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/sweetalert/dist/sweetalert.css') ?>">
<script type="text/javascript" src="<?= base_url('assets/home/sweetalert/dist/sweetalert.min.js') ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
<script>
	if ('serviceWorker' in navigator) {
		navigator.serviceWorker.register('<?= base_url('/firebase-messaging-sw.js') ?>')
			.then(function(reg) {
				// registration worked
				console.log('Registration succeeded.');
			}).catch(function(error) {
				// registration failed
				console.log('Registration failed with ' + error);
			});
	}
	var config = {
		apiKey: "AIzaSyDeFzy11Dn3yTyUY1HYAr_xhH4w3Dn1hjc",
		authDomain: "e-voting-2c4c8.firebaseapp.com",
		databaseURL: "https://e-voting-2c4c8.firebaseio.com",
		storageBucket: "e-voting-2c4c8.appspot.com",
		messagingSenderId: "782077283246",
	};
	firebase.initializeApp(config);
	const messaging = firebase.messaging();
	messaging.requestPermission()
		.then(function() {
			console.log('GRANTED');

			return messaging.getToken()
				.then(function(token) {
					console.log(token);
					subscribeTokenToTopic(token, 'vote_activity');
				});
		})
		.catch(function(err) {
			console.log('Unable to get permission to notify.', err);
		});

	messaging.onMessage(function(payload) {
		toastr.info('Seseorang melakukan voting untuk ' + payload.data.option_id);
	});

	function subscribeTokenToTopic(token, topic) {
		fetch('https://iid.googleapis.com/iid/v1/' + token + '/rel/topics/' + topic, {
			method: 'POST',
			headers: new Headers({
				'Authorization': 'key=AAAAthdwS64:APA91bElGH1Thv0CxHAeT4uCNiiewE8I0v2Q4m9MMYmxzoaOWtfU-flI3dQ_mApMlyp65XkODiLaf3jtOt2moiVC4zXMyY7o4-_RDQJLGcv9Yvx1hHgs7pCYgIDwmErEKk3i6eEZJh_j'
			})
		}).then(response => {
			if (response.status < 200 || response.status >= 400) {
				throw 'Error subscribing to topic: ' + response.status + ' - ' + response.text();
			}
			console.log('Subscribed to "' + topic + '"');
		}).catch(error => {
			console.error(error);
		})
	}
</script>
<script type="text/javascript">
	// toastr.info('Are you the 6 fingered man?')

	function set_vote(option_id) {
		$('#option_id').val(option_id);
		$('#vote-modal-body').css('opacity', '0.5');
		$('#vote-modal-loader')
			.css('display', 'block')
			.css('opacity', '1');
		$.get('<?= base_url('home/get-finalis?option_id=') ?>' + option_id, function(response) {
			var json = $.parseJSON(response);
			var details = $.parseJSON(json.data.details);
			$('#no_urut').text(details.no_peserta);
			$('#nama_peserta').text(details.nama);
			$('#vote-modal-body').css('opacity', '1');
			$('#vote-modal-loader')
				.css('display', 'none')
				.css('opacity', '1');
		});
	}

	function voting() {
		$.post('<?= base_url('home/set-vote') ?>', {
				code: $('#voucher').val(),
				'submit-voucher': true,
				option_id: $('#option_id').val(),
				'<?= $this->security->get_csrf_token_name() ?>': '<?= $this->security->get_csrf_hash() ?>'
			}).done(function(response) {
				if ($('#voucher').val().length === 0) {
					swal("Failed!", "Voucher code is not valid", "error");
				} else {
					var json = $.parseJSON(response);
					if (json.error == true) {
						swal("Failed!", json.error_msg, "error");
					} else {
						// var text = [ 'Terima kasih atas dukunganmu. Ajak temanmu yang lain untuk mendukung finalis favoritmu dengan klik tombol bagikan di bawah ini', 'Terima kasih atas dukunganmu. Selain melalui website, kamu juga bisa melakukan voting melalui aplikasi android yang dapat di-download dengan klik tombol download di bawah ini' ];
						var text = ['Terima kasih atas dukunganmu. Ajak temanmu yang lain untuk mendukung finalis favoritmu dengan klik tombol bagikan di bawah ini'];
						var idx = getRandomInt(0, text.length - 1);
						swal({
							title: 'Success!',
							text: text[idx],
							type: 'success',
							confirmButtonText: (idx == 0 ? 'Bagikan' : 'Download'),
							cancelButtonText: 'Tutup',
							showCancelButton: true
						}, function(confirmed) {
							if (idx == 0) {
								if (confirmed) {
									$('#share-button-' + $('#option_id').val()).click();
								}
								window.location = '<?= base_url('home/vote') ?>';
							} else {
								if (confirmed) {
									window.location = 'https://play.google.com/store/apps/details?id=com.puding_e_voting';
								} else {
									window.location = '<?= base_url('home/vote') ?>';
								}
							}
						});
					}
				}
			})
			.error(function(e) {
				swal("Failed!", "Please refresh the page!", "error");
			});
	}

	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
</script>


<script type="text/javascript">
	Highcharts.chart('grafikbujang', {
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Bujang'
		},
		xAxis: {
			categories: [
				<?php foreach ($finalist as $row) : ?>
					<?php
					$details = json_decode($row->details);
					if ($details->jenis_kelamin != 'l') {
						continue;
					}
					?> '<?= addslashes($row->label) ?>',
				<?php endforeach; ?>
			],
			title: {
				text: null
			}
		},
		yAxis: {
			min: 0,
			max: 100,
			title: {
				text: 'Jumlah voting dalam persen ( % )',
				align: 'high'
			},
			labels: {
				overflow: 'justify'
			}
		},
		tooltip: {
			valueSuffix: ' %'
		},
		plotOptions: {
			bar: {
				dataLabels: {
					enabled: true
				}
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -40,
			y: 80,
			floating: true,
			borderWidth: 1,
			backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			shadow: true
		},
		credits: {
			enabled: false
		},
		series: [{
			name: 'Hasil Voting Sementara',
			data: [
				<?php foreach ($finalist as $row) : ?>
					<?php
					$details = json_decode($row->details);
					if ($details->jenis_kelamin != 'l') {
						continue;
					}
					?>
					<?= isset($total_votes) && $total_votes->l <= 0 ? 0 : round(($row->total_votes / $total_votes->l) * 100, 2) ?>,
				<?php endforeach; ?>
			]
		}]
	});
	Highcharts.chart('gadis', {
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Gadis'
		},
		xAxis: {
			categories: [
				<?php foreach ($finalist as $row) : ?>
					<?php
					$details = json_decode($row->details);
					if ($details->jenis_kelamin != 'p') {
						continue;
					}
					?> '<?= addslashes($row->label) ?>',
				<?php endforeach; ?>
			],
			title: {
				text: null
			}
		},
		yAxis: {
			min: 0,
			max: 100,
			title: {
				text: 'Jumlah voting dalam persen ( % )',
				align: 'high'
			},
			labels: {
				overflow: 'justify'
			}
		},
		tooltip: {
			valueSuffix: ' %'
		},
		plotOptions: {
			bar: {
				dataLabels: {
					enabled: true
				}
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -40,
			y: 80,
			floating: true,
			borderWidth: 1,
			backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			shadow: true
		},
		credits: {
			enabled: false
		},
		series: [{
			name: 'Hasil Voting Sementara',
			data: [
				<?php foreach ($finalist as $row) : ?>
					<?php
					$details = json_decode($row->details);
					if ($details->jenis_kelamin != 'p') {
						continue;
					}
					?>
					<?= $total_votes->p <= 0 ? 0 : round(($row->total_votes / $total_votes->p) * 100, 2) ?>,
				<?php endforeach; ?>
			],
			color: '#e04f67'
		}]
	});
</script>
