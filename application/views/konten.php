<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>

    <i class="ace-icon fa fa-check green"></i>

    Selamat Datang ke
    <strong class="green">
        Aplikasi Form Terpadu MahaSantri PeTIK
        <small>(Beta.v0.1)</small>
    </strong>
    , Pesantren Teknologi Informasi dan Komunikasi
</div>
<?php $info = $this->session->flashdata('info');
    if(!empty($info)){
        echo $info;
    } ?>
<?php $info1 = $this->session->flashdata('info1');
    if(!empty($info1)){
        echo $info1;
    } ?>

