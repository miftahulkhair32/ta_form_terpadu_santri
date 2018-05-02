<div class="row">
    <div class="col-xs-12">
    <h3 class="header smaller lighter blue">Laporan Form Terpadu</h3>
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
            <?= form_open() ?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,'pilih',['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_submit('submit','cek',['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_close() ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- isi table -->
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th rowspan="2" class="center">NO</th>
                        <th rowspan="2" class="center">Nama</th>
                        <th colspan="7" class="center">Karakter</th>
                        <th colspan="4" class="center">Tahfidz</th>
                        <th rowspan="2" class="center">Jenis Pelanggaran</th>
                        <th rowspan="2" class="center">Jumlah Point</th>
                        <th rowspan="2" class="center">Keterangan</th>
                        <th rowspan="2" class="center">Judul Artikel</th>
                    </tr>
                    <tr>
                        <th class="center">Partisipasi Program</th>
                        <th class="center">Jumlah Nilai</th>
                        <th class="center">Target Pencapaian</th>
                        <th class="center">Jumlah Nilai</th>
                        <th class="center">Nilai Observasi</th>
                        <th class="center">Total Nilai</th>
                        <th class="center">Huruf</th>
                        <th class="center">Jumlah Hapalan</th>
                        <th class="center">Jumlah Nilai Perbulan</th>
                        <th class="center">Total Nilai</th>
                        <th class="center">Huruf</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>