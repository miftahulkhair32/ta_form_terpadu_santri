<?php 
$info = $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}?>
<h4 class="header green lighter bigger">
	<i class="ace-icon fa fa-users red"></i>
	Edit User
</h4>

<div class="space-6"></div>
<p> Edit Data User Dengan Benar : </p>

<?= form_open_multipart('user/proses_edit_san',['class'=>'form-horizontal']) ?>
    <div class="form-group">
		<?= form_label('Username','username',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_input('username',$data['username'],['class'=>'form-control','id'=>'username','placeholder'=>'Username']) ?>
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>
		<?= form_error('username','<div class="text-danger"><small>','</small></div>') ?>
	</div>

    <div class="form-group">
		<?= form_label('Email','email',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" id="email" placeholder="Email" />
				<i class="ace-icon fa fa-envelope"></i>
			</span>
		</label>
		<?= form_error('email','<div class="text-danger"><small>','</small></div>') ?>
	</div>

    <div class="form-group">
		<?= form_label('Password Lama','passlama',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clear  fix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_password('passlama','',['class'=>'form-control','id'=>'passlama','placeholder'=>'Password Lama']) ?>
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>
		<?= form_error('passlama','<div class="text-danger"><small>','</small></div>') ?>
	</div>

    <div class="form-group">
		<?= form_label('Password Baru','password',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_password('password','',['class'=>'form-control','id'=>'password','placeholder'=>'Password Baru']) ?>
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>
		<?= form_error('password','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Ulangi Password Baru','passconf',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_password('passconf','',['class'=>'form-control','id'=>'passconf','placeholder'=>'Ulangi Password Baru']) ?>
				<i class="ace-icon fa fa-retweet"></i>
			</span>
		</label>
		<?= form_error('passconf','<div class="text-danger"><small>','</small></div>') ?>
	</div>

    <div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-4">
			<div class="widget-box">
				<div class="widget-header">
					<h4 class="widget-title">Masukkan Foto</h4>
				</div>
				<div class="widget-body" style="display:block;">
					<div class="widget-main">
						<div class="form-group">
							<div class="col-xs-12">
								<?= form_upload('foto','',['id'=>'id-input-file-2']) ?>
							</div>
						</div>
						<?= $this->upload->display_errors('<div class="text-danger"><small>','</small></div>') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="space-24"></div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-1 col-md-9">
			<span class="bigger-110">
				<?= form_submit('submit','Kirim',['class'=>'btn btn-success']) ?>
			</span>
		</div>
	</div>
<?= form_close(); ?>
<script>
$('#id-input-file-2').ace_file_input({
	no_file:'Tidak ada foto',
	btn_choose:'Pilih',
	btn_change:'Ganti',
	droppable:false,
	onchange:null,
	thumbnail:false //| true | large
	//whitelist:'gif|png|jpg|jpeg'
	//blacklist:'exe|php'
	//onchange:''
	//
});
</script>