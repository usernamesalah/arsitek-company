<link href="<?=base_url()?>assets/home/css/slider-pro.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/home/css/date_time_picker.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/home/css/owl.carousel.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/home/css/owl.theme.css" rel="stylesheet">
	<style type="text/css" media="screen">
		.video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px; height: 0; overflow: hidden;
            }

            .video-container iframe,
            .video-container object,
            .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
	</style>
<main>
	<div class="container margin_60">
		<div class="main_title" id="vote" style="margin-top: 5% !important;">
			<h2>Let's Vote for <?= $finalist->label ?></h2>
		</div>
		<div class="row">
			<div class="col-md-8">
				    <?php $details = json_decode($finalist->details); $i = 0; ?>
					<center>
						<img style="display: inline-block;" width="364" height="547" alt="Image" class="sp-image" src="<?= $admin_url . '/' . $option_id . '-label.jpg' ?>" data-src=<?= $admin_url . '/' . $option_id . '-label.jpg' ?>" data-small="<?= $admin_url . '/' . $option_id . '-label.jpg' ?>" data-medium="<?= $admin_url . '/' . $option_id . '-label.jpg' ?>" data-large="<?= $admin_url . '/' . $option_id . '-label.jpg' ?>" data-retina="<?= $admin_url . '/' . $option_id . '-label.jpg' ?>">
					</center>
				   <!--  <br/><br/><br/>
				    <div class="row">
            			<div class="col-md-12">
            				<div class="video-container"><iframe width="853" height="480" src="<?= $details->video_url ?>&embedded=true" frameborder="0" allowfullscreen></iframe></div>
            			</div>
            		</div> -->
					
			</div>
			<div class="col-md-4">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Nama</td>
							<td><?= $details->nama ?></td>
						</tr>
						<tr>
							<td>No Peserta</td>
							<td><?= $details->no_peserta ?></td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td><?= $details->jenis_kelamin == 'p' ? 'Perempuan' : 'Laki-laki' ?></td>
						</tr>

						<tr>
							<td>Tanggal Lahir</td>
							<td><?= date('d-m-Y', strtotime($details->tanggal_lahir)) ?></td>
						</tr>
						<!-- <tr>
							<td>Kelas</td>
							<td><?= $details->kelas ?></td>
						</tr> -->
					</tbody>
				</table>
				<div class="clearfix">
					
				</div>
				<div class="btn-group">
					<a class="btn btn-lg btn-danger" href="<?= base_url('home/vote') ?>">
					    <i class="icon-heart-filled"></i> Vote
					</a>
					<button id="share-button-<?= $option_id ?>" class="btn btn-primary btn-lg" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://bgp-palembang.com/open-graph/index/<?= $option_id ?>'),'facebook-share-dialog','width=626,height=436'); return false;"><i class="icon-facebook"></i> Bagikan</button>
				</div>
				<br/><br/>
				<label>Link untuk dibagikan</label>
				<div class="input-group">
                    <span class="input-group-addon"><span onclick="copy_to_clipboard();" data-toggle="tooltip" title="Copy to clipboard" class="icon-clipboard"></span></span>
                    <input type="text" onclick="copy_to_clipboard();" data-toggle="tooltip" title="Copy to clipboard" id="share-url" readonly class="form-control">
                </div>
                <br/><br/>
                <!-- <h4>How to vote:</h4>
                <div class="embed-container">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BoWpZJHnal_/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BoWpZJHnal_/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BoWpZJHnal_/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Hello Squad, Don�t missed it!! Dukung finalis favorit kalian untuk menjadi Bujang dan Gadis Favorit Universitas Sriwijaya 2018 dengan cara : 1. Sebelum voting pastikan kamu sudah mempunyai kode voucher dengan cara membeli voucher melalui Gadis Nadhyra 082186725451 (SMS &amp; WHATSAPP ONLY.) 2. Buka website bgunsri.com lalu klik tombol vote di sudut kanan atas. 3. Pilih jagoan favorit kamu dan klik fotonya. 4. Klik tombol vote berwarna merah. 5. Masukan kode voucher pada kolom yang disediakan. 6. Voting berhasil! ______________ Note. Voucher yang tersedia dengan ketentuan : *10.000 = 10 poin *25.000 = 25 poin *50.000 = 55 poin *100.000 = 115 poin *500.000 = 600 poin ______________ Untuk mempercepat proses dipersilahkan Transfer ke rek. BNI : 0266997374 a/n Nadhyra Azvika sesuai jumlah voucher yg ingin dibeli. Kirim bukti transfer ke WA 082186725451 dan kode voucher akan langsung didapatkan. Vote sebanyak-banyaknya! Official voting dibuka dari tanggal 30 September pukul 20.00 - 12 Oktober 2018 pukul 21.00 #voting #evoting #bgunsri #unsri #palembang #technology #future #bgunsrixpudinglab</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Sebuah kiriman dibagikan oleh <a href="https://www.instagram.com/pudinglab/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> PudingLab.id</a> (@pudinglab) pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-09-30T14:37:00+00:00">30 Sep 2018 jam 7:37 PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                </div> -->
			</div>
		</div>
		<style>
		    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css");
		    
		    .embed-container {
              position: relative; 
              padding-bottom: 120%; 
              height: 1000px; 
              overflow: hidden;
            }
            .spinner {
              display: inline-block;
              opacity: 0;
              max-width: 0;
            
              -webkit-transition: opacity 0.25s, max-width 0.45s; 
              -moz-transition: opacity 0.25s, max-width 0.45s;
              -o-transition: opacity 0.25s, max-width 0.45s;
              transition: opacity 0.25s, max-width 0.45s; /* Duration fixed since we animate additional hidden width */
            }
            
            .has-spinner.active {
              cursor:progress;
            }
            
            .has-spinner.active .spinner {
              opacity: 1;
              max-width: 50px; /* More than it will ever come, notice that this affects on animation duration */
            }
		</style>
		<hr>
	</div>
</main>

<!-- <div id="vote-modal" class="modal fade" role="dialog" style="z-index: 999 !important;">
	  <div class="modal-dialog">
	  	<style type="text/css">div.modal-backdrop { z-index: 888 !important;  }</style>
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Masukan Kode Voucher</h4>
	      </div>
	      <div class="modal-body" id="vote-modal-body">
	      	<?= form_open('home/vote', ['onsubmit' => 'return false;']) ?>
	            <div class="row">
	            	<div class="col-md-12">
	            		<img id="vote-modal-loader" width="70" height="70" style="display: none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto; opacity: 1;" src="<?= base_url( 'assets/home/sweetalert/dist/ripple.gif' ) ?>">
		            	<table class="table">
		            		<tr>
		            			<td><b>No. Peserta</b></td>
		            			<td id="no_urut"><?= $details->no_peserta ?></td>
		            		</tr>
		            		<tr>
		            			<td><b>Nama</b></td>
		            			<td id="nama_peserta"><?= $details->nama ?></td>
		            		</tr>
		            	</table>
	            	</div>
	            </div>
	            <div class="row">
	                <input type="hidden" name="option_id" id="option_id" value="<?= $option_id ?>">
	                <div class="col-xs-7 col-sm-6 col-md-6 col-lg-6 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 col-lg-offset-2">
	                    <input type="text" name="code" class="form-control" style="text-transform: uppercase;" maxlength="5" id="voucher">
	                </div>
	                <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
	                    <button class="btn btn-info has-spinner" id="vote-btn" onclick="voting()">
	                        <span class="spinner"><i class="fa fa-refresh fa-spin"></i></span> Vote
	                    </button>
	                </div>
	            </div>
	        <?= form_close() ?>

	      </div>
	    </div>

	  </div>
	</div>   -->

<script src="<?=base_url()?>assets/home/js/jquery.sliderPro.min.js"></script>

	<script src="<?=base_url()?>assets/home/js/owl.carousel.min.js"></script>
	<!--<script>-->
	<!--	$(document).ready(function ($) {-->
	<!--		$('#Img_carousel').sliderPro({-->
	<!--			width: 960,-->
	<!--			height: 500,-->
	<!--			fade: true,-->
	<!--			arrows: true,-->
	<!--			buttons: false,-->
	<!--			fullScreen: false,-->
	<!--			smallSize: 500,-->
	<!--			startSlide: 0,-->
	<!--			mediumSize: 1000,-->
	<!--			largeSize: 3000,-->
	<!--			thumbnailArrows: true,-->
	<!--			autoplay: false-->
	<!--		});-->
	<!--		$(".carousel").owlCarousel({-->
	<!--			items: 4,-->
	<!--			itemsDesktop: [1199, 3],-->
	<!--			itemsDesktopSmall: [979, 3]-->
	<!--		});-->
	<!--	});-->
	<!--</script>-->

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url( 'assets/home/sweetalert/dist/sweetalert.css' ) ?>">
<script type="text/javascript" src="<?= base_url( 'assets/home/sweetalert/dist/sweetalert.min.js' ) ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
<script>
    document.getElementById('share-url').value = location.href;
    function copy_to_clipboard() {
        let copyText = document.getElementById("share-url");
        copyText.select();
        document.execCommand("copy");
        toastr.success('Link share berhasil disalin');
    }

	if ('serviceWorker' in navigator) {
		navigator.serviceWorker.register( '<?= base_url( '/firebase-messaging-sw.js' ) ?>' )
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
  			console.log( 'GRANTED' );
  			
  			return messaging.getToken()
  				.then(function( token ) {
  					console.log( token );
  					subscribeTokenToTopic( token, 'vote_activity' );
  				});
  		})
  		.catch(function( err ) {
  			console.log('Unable to get permission to notify.', err);
  		});

  	messaging.onMessage(function( payload ) {
		toastr.info( 'Seseorang melakukan voting untuk ' + payload.data.option_id );
	});

	function subscribeTokenToTopic(token, topic) {
		fetch('https://iid.googleapis.com/iid/v1/'+token+'/rel/topics/'+topic, {
			method: 'POST',
			headers: new Headers({
				'Authorization': 'key=AAAAthdwS64:APA91bElGH1Thv0CxHAeT4uCNiiewE8I0v2Q4m9MMYmxzoaOWtfU-flI3dQ_mApMlyp65XkODiLaf3jtOt2moiVC4zXMyY7o4-_RDQJLGcv9Yvx1hHgs7pCYgIDwmErEKk3i6eEZJh_j'
			})
		}).then(response => {
			if (response.status < 200 || response.status >= 400) {
				throw 'Error subscribing to topic: '+response.status + ' - ' + response.text();
			}
			console.log('Subscribed to "'+topic+'"');
		}).catch(error => {
			console.error(error);
		})
	}
</script>
<script type="text/javascript">
	// toastr.info('Are you the 6 fingered man?')

	// function set_vote(option_id) {
 //        $('#option_id').val(option_id);
 //        $( '#vote-modal-body' ).css( 'opacity', '0.5' );
 //        $( '#vote-modal-loader' )
 //        	.css( 'display', 'block' )
 //        	.css( 'opacity' , '1');
 //        $.get('<?= base_url('home/get-finalis?option_id=') ?>' + option_id, function(response) {
	// 		var json = $.parseJSON(response);
	// 		var details = $.parseJSON(json.data.details);
	// 		$('#no_urut').text(details.no_peserta);
	// 		$('#nama_peserta').text(details.nama);
 //        	$( '#vote-modal-body' ).css( 'opacity', '1' );
	//         $( '#vote-modal-loader' )
	//         	.css( 'display', 'none' )
	//         	.css( 'opacity' , '1');
 //        });
 //    }

	// function voting() {
	//     $('#vote-btn').toggleClass('active');
	// 	$.post('<?= base_url('home/set-vote') ?>', {
	// 		code: $('#voucher').val(), 
	// 		'submit-voucher': true, 
	// 		option_id: $('#option_id').val(),
	// 		'<?= $this->security->get_csrf_token_name() ?>': '<?= $this->security->get_csrf_hash() ?>'
	// 	}).done(function(response) {
	// 	    $('#vote-btn').toggleClass('active');
	// 		if( $('#voucher').val().length === 0 ) {
	// 			swal("Failed!", "Voucher code is not valid", "error");
	// 		} else {
	// 			var json = $.parseJSON(response);
	// 			if (json.error == true) {
	// 				swal("Failed!", json.error_msg, "error");
	// 			} else {
	// 				var text = [ 'Terima kasih atas dukunganmu. Ajak temanmu yang lain untuk mendukung finalis favoritmu dengan klik tombol bagikan di bawah ini', 'Terima kasih atas dukunganmu. Selain melalui website, kamu juga bisa melakukan voting melalui aplikasi android yang dapat di-download dengan klik tombol download di bawah ini' ];
	// 				var idx = getRandomInt(0, text.length - 1);
	// 				swal({
	// 					title: 'Success!',
	// 					text: text[idx],
	// 					type: 'success',
	// 					confirmButtonText: (idx == 0 ? 'Bagikan' : 'Download'),
	// 					cancelButtonText: 'Tutup',
	// 					showCancelButton: true
	// 				}, function( confirmed ) {
	// 					if ( idx == 0 ) {
	// 						if ( confirmed ) {
	// 							$( '#share-button-' + $( '#option_id' ).val() ).click();
	// 						}
	// 						window.location = '<?= base_url( 'home/vote' ) ?>';
	// 					} else {
	// 						if ( confirmed ) {
	// 							window.location = 'https://play.google.com/store/apps/details?id=com.puding_e_voting';
	// 						} else {
	// 							window.location = '<?= base_url( 'home/vote' ) ?>';
	// 						}
	// 					}
	// 				});
	// 			}
	// 		}
	// 	})
	// 	.error(function(e) {
	// 	    $('#vote-btn').toggleClass('active');
	// 		swal("Failed!", "Please refresh the page!", "error");
	// 	});
 //    }

 //    function getRandomInt(min, max) {
	//     return Math.floor(Math.random() * (max - min + 1)) + min;
	// }
</script>

	