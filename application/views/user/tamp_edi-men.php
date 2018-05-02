<?php 
$info = $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}?>
<div class="row">
    <div class="col-xs-12">
        <h4 class="header green lighter bigger">
            <i class="ace-icon fa fa-users red"></i>
            Edit User
        </h4>

        <div class="space-6"></div>
        <p> Edit Data User Dengan Benar : </p>

        <?= form_open('user/proses_edit_men',['class'=>'form-horizontal']) ?>

        <?= form_hidden('namalama',$data['nama']) ?>

        <div class="form-group">
            <?= form_label('Nim','nim',['class'=>'col-sm-2 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-4">
                <span class="block input-icon input-icon-right">
                    <?= form_input('nim',$data['nim'],['class'=>'form-control','id'=>'nim','placeholder'=>'NIM']) ?>
                    <i class="ace-icon fa fa-certificate"></i>
                </span>
            </label>
            <?= form_error('nim','<div class="text-danger"><small>','</small></div>') ?>
        </div>

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
                    <input type="email" value="<?= $data['email'] ?>" name="email" class="form-control" id="email" placeholder="Email" />
                    <i class="ace-icon fa fa-envelope"></i>
                </span>
            </label>
            <?= form_error('email','<div class="text-danger"><small>','</small></div>') ?>
        </div>

        <div class="form-group">
            <?= form_label('Asal Daerah','asal',['class'=>'col-sm-2 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-4">
                <span class="block input-icon input-icon-right">
                    <?= form_input('daerah',$data['daerah'],['class'=>'form-control','id'=>'nim','placeholder'=>'Asal Daerah']) ?>
                    <i class="ace-icon fa fa-globe"></i>
                </span>
            </label>
            <?= form_error('daerah','<div class="text-danger"><small>','</small></div>') ?>
        </div>

        <div class="space-24"></div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-1 col-md-9">
                <span class="bigger-110">
                    <?= form_submit('submit','Kirim',['class'=>'btn btn-success']) ?>
                </span>
            </div>
        </div>

    </div>
</div>