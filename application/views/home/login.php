<main>
    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center" style="font-size: 18px;">
                                Login Pemilihan Bujang Gadis Palembang 2018
                            </div>
                            <hr>
                            <?= $this->session->flashdata('msg') ?>
                            <?=form_open('login')?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class=" form-control " name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class=" form-control" name="password" placeholder="Password">
                                </div>
                                <input type="submit" class="btn_full" name="login" value="Login">
                                <a href="<?=base_url('daftar')?>" class="btn_full_outline">Daftar</a>
                            <?=form_close()?>
                        </div>
                </div>
            </div>
        </div>
    </section>
	</main><!-- End main -->
