<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Partisipasi Harian</h3>
        <?php $info = $this->session->flashdata('info');
        if(!empty($info)){
            echo $info;
        } ?>
        <div class="clearfix"></div>
        <div class="table-header">
            <div class="col-xs-3">
                <strong>Nama</strong> : <?= $this->session->userdata('nama'); ?>
            </div> 
            <strong>Bulan</strong> : <?= $bulan ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <?= form_open('pelanggaran/proses_input') ?>
            </div>
        </div>
    </div>
</div>