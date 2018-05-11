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

<div class="row">
    <div class="space-6"></div>

    <div class="col-xs-12 infobox-container">
        <div class="infobox infobox-red">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-calendar"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"><?= $tgl ?></span>
                <div class="infobox-content">Tanggal Sekarang</div>
            </div>
        </div>

        <div class="infobox infobox-green">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"><?= $san ?></span>
                <div class="infobox-content">Santri</div>
            </div>
        </div>

        <div class="infobox infobox-blue">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"><?= $men ?></span>
                <div class="infobox-content">Pengasuhan</div>
            </div>
        </div>

        <div class="infobox infobox-pink">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"><?= $total ?></span>
                <div class="infobox-content">Total User</div>
            </div>
        </div>
    </div>
</div>

