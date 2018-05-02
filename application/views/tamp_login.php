<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Halaman Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css'); ?>" />
		<link rel="stylesheet" href="<?= base_url('asset/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url('asset/css/fonts.googleapis.com.css'); ?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url('asset/css/ace.min.css'); ?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php //echo base_url('asset/css/ace-part2.min.css'); ?>" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url('asset/css/ace-rtl.min.css'); ?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php //echo base_url('asset/css/ace-ie.min.css'); ?>" />
		<![endif]-->
		<script src="<?= base_url('asset/js/jquery-2.1.4.min.js'); ?>"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="asset/js/html5shiv.min.js"></script>
		<script src="asset/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Form Terpadu</span>
									<span class="white" id="id-text2">MahaSantri PeTIK</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; PeTIK 2018 - 2019</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Masukan Informasi
											</h4>

											<div class="space-6"></div>

											<?= form_open('user/proses_login',['onsubmit'=>'return cekform();']); ?>
												<?= form_fieldset(); ?>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?= form_input('username','',['placeholder'=>'Username','class'=>'form-control','id'=>'username']); ?>
															<i class="ace-icon fa fa-user"></i>
														</span>
														<?= form_error('username','<div class="text-danger"><small>','</small></div>') ?>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?= form_password('password','',['placeholder'=>'Password','class'=>'form-control','id'=>'password']); ?>
															<i class="ace-icon fa fa-lock"></i>
														</span>
														<?=  form_error('password','<div class="text-danger"><small>','</small></div>') ?>
													</label>
												
													<?php $info = $this->session->flashdata('info');
														if(!empty($info)){
															echo $info;
														} ?>
													
													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<?= form_checkbox('','',FALSE,['class'=>'ace']) ?>
															<span class="lbl"> Remember Me</span>
														</label>

														<?= form_submit('submit','Login',['class'=>'width-35 pull-right btn btn-sm btn-primary']); ?>
													</div>

													<div class="space-4"></div>
												<?= form_fieldset_close(); ?>
											<?= form_close(); ?>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div class="col-xs-3 center">
												<span class="bigger-110 center">&copy; PeTIK 2018 - 2019</span>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Hitam</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Putih</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script>
			function cekform() {
				if(!$('#username').val()){
					alert('maaf username tidak boleh kosong!!!');
					$('#username').focus();
					return false;
				} 
				if(!$('#password').val()){
					alert('maaf password tidak boleh kosong!!!');
					$('#password').focus();
					return false;
				}
			}
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src=<?= base_url('asset/js/jquery.mobile.custom.min.js'); ?>>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
