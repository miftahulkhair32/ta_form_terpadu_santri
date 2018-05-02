
<h3 class="header smaller lighter blue">Input Form Artikel</h3>
<?php $info = $this->session->flashdata('info');
if(!empty($info)){
    echo $info;
} ?>
<div class="alert alert-info"><strong> Catatan </strong> File Yang di Input Harus Format zip,docx,rar,odt,ods, dan pdf</div>
<div class="clearfix"></div>
<div class="table-header">
    <div class="col-xs-3">
        <strong>Nama</strong> : <?= $this->session->userdata('nama'); ?>
    </div> 
    <strong>Bulan</strong> : <?= $bulan ?>
</div>

<div class="hr hr-18 dotted hr-double"></div>
<?= form_open_multipart('artikel/proses_input',['class'=>'form-horizontal']) ?>
<?= form_hidden('bulan',$bulan) ?>
<?= form_hidden('nama',$this->session->userdata('nama')) ?>
<div class="row">
    <div class="col-xs-11">
        <div class="form-group">
            <?= form_label('Judul Artikel','judul',['class'=>'col-sm-3 control-label no-padding-right']) ?>
            <label class="block clearfix col-xs-8">
                <span class="block input-icon input-icon-right">
                    <?= form_input('judul','',['class'=>'form-control','id'=>'judul','placeholder'=>'Judul']) ?>
                    <i class="ace-icon fa fa-certificate"></i>
                </span>
            </label>
        </div>
        <div class="col-sm-3"></div>
        <div class="row">
            <div class="col-xs-8">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Masukkan File Artikel</h4>
                    </div>
                    <div class="widget-body" style="display:block;">
                        <div class="widget-main">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <?= form_upload('artikel','',['id'=>'id-input-file-2']) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->upload->display_errors('<div class="text-danger"><small>','</small></div>') ?>
                    </div>
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
	no_file:'Tidak ada File',
	btn_choose:'Pilih',
	btn_change:'Ganti',
	droppable:false,
	onchange:null,
	thumbnail:false //| true | large
	//onchange:''
	//
});
</script>