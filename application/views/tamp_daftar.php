<?php 
$info = $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}
$info1 = $this->session->flashdata('info1');
if(!empty($info1)){
	echo $info1;
}?>
<h4 class="header green lighter bigger">
	<i class="ace-icon fa fa-users blue"></i>
	Daftar User Baru
</h4>

<div class="space-6"></div>
<p> Masukan Data User Dengan Benar: </p>

<?= form_open_multipart('user/proses_daftar',['class'=>'form-horizontal']) ?>
	<div class="form-group">
		<?= form_label('Nama','nama',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_input('nama','',['class'=>'form-control','id'=>'nama','placeholder'=>'Nama Lengkap']) ?>
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>
		<?= form_error('nama','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Nim','nim',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_input('nim','',['class'=>'form-control','id'=>'nim','placeholder'=>'NIM']) ?>
				<i class="ace-icon fa fa-certificate"></i>
			</span>
		</label>
		<?= form_error('nim','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Asal Daerah','asal',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_input('daerah','',['class'=>'form-control','id'=>'nim','placeholder'=>'Asal Daerah']) ?>
				<i class="ace-icon fa fa-globe"></i>
			</span>
		</label>
		<?= form_error('daerah','<div class="text-danger"><small>','</small></div>') ?>
	</div>


	<div class="form-group">
		<?= form_label('Username','username',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_input('username','',['class'=>'form-control','id'=>'username','placeholder'=>'Username']) ?>
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>
		<?= form_error('username','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Email','email',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<input type="email" name="email" class="form-control" id="email" placeholder="Email" />
				<i class="ace-icon fa fa-envelope"></i>
			</span>
		</label>
		<?= form_error('email','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Password','password',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_password('password','',['class'=>'form-control','id'=>'password','placeholder'=>'Password']) ?>
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>
		<?= form_error('password','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="form-group">
		<?= form_label('Ulangi Password','passconf',['class'=>'col-sm-2 control-label no-padding-right']) ?>
		<label class="block clearfix col-xs-4">
			<span class="block input-icon input-icon-right">
				<?= form_password('passconf','',['class'=>'form-control','id'=>'passconf','placeholder'=>'Ulangi Password']) ?>
				<i class="ace-icon fa fa-retweet"></i>
			</span>
		</label>
		<?= form_error('passconf','<div class="text-danger"><small>','</small></div>') ?>
	</div>

	<div class="control-group">
		<label class="col-sm-2 control-label">Status</label>
		<div class="radio">
			<label>
				<?= form_radio('status','santri',TRUE,['class'=>'ace']) ?>
				<span class="lbl">Santri</span>
			</label>
			<label>
				<?= form_radio('status','menejemen',FALSE,['class'=>'ace']) ?>
				<span class="lbl">Pengasuhan</span>
			</label>
		</div>
		<?= form_error('status','<div class="text-danger"><small>','</small></div>') ?>
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
				<?= form_submit('submit','Daftar',['class'=>'btn btn-success']) ?>
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