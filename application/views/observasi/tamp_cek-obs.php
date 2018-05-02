<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Laporan Form Observasi</h3>
        <?php $info = $this->session->flashdata('info');
        if(!empty($info)){
            echo $info;
        }
        $ops = [
            'pilih'     =>  '--Pilih Bulan--',
            'Agustus'   =>  'Agustus',
            'September' =>  'September',
            'Oktober'   =>  'Oktober',
            'November'  =>  'November',
            'Desember'  =>  'Desember',
            'Januari'   =>  'Januari',
            'Februari'  =>  'Februari',
            'Maret'     =>  'Maret',
            'April'     =>  'April',
            'Mei'       =>  'Mei',
            'Juni'      =>  'Juni',
            'Juli'      =>  'Juli'
        ];
        ?>
        <div class="clearfix"></div>
        <div class="table-header">
            <?= form_open('observasi/get') ?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,'pilih',['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_submit('submit','cek',['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_close() ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th rowspan="2" class="center">NO</th>
                            <th rowspan="2" class="center">Nama</th>
                            <th class="center">10 Karakter</th>
                            <th rowspan="2" class="center">Jumlah</th>
                            <th rowspan="2" class="center">Point Pelanggaran</th>
                            <th rowspan="2" class="center">Total</th>
                            <th rowspan="2" class="center">Aksi</th>
                        </tr>
                        <tr>
                            <th class="center">Nama Pengasuhan</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>