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
            <?= form_open('laporan/get') ?>
            <?php $bul = $data->row_array()?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,$bul['bulan'],['class'=>'btn btn-primary btn-sm']) ?>
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
                    <tbody>
                    <?php
                    $m=0;
                    foreach($mene->result() as $me ) {
                    $poi[$m] = $me->username;
                    $m++;
                    }
                    $m--;
                    $no=1;
                        foreach($data->result_array() as $da) : ?>
                    <tr>
                        <td class="center"><?= $no ?></td>
                        <td class="center"><?= $da['nama'] ?></td>
                        <td class="center"><?= $da['parpro'] ?></td>
                        <?php $lol = $da['parpro']/460*100 ?>
                        <td class="center"><?= $lol ?></td>
                        <td class="center"><?= $da['tarpen'] ?></td>
                        <?php $top = $da['tarpen']/34 ?>
                        <td class="center"><?= $top ?></td>
                        <?php
                            $com = $m;
                            $n=0;
                            $jml=0;
                            while($com>-1) {
                            $jml += $da[$poi[$n]];
                            $n++; 
                            $com--;
                            } ?>
                        <td class="center"><?= $jml ?></td>
                        <?php $pop = ($lol+$top+$jml)/3 ?>
                        <td class="center"><?= $pop ?></td>
                        <td class="center">huruf</td>
                        <td class="center"><?= $da['jumhap'] ?></td>
                        <td class="center"><?= $da['jumnilper'] ?></td>
                        <?php $df = $da['jumnilper']/4 ?>
                        <td class="center"><?= $df ?></td>
                        <td class="center">huruf</td>
                        <td class="center"><?= $da['jenpel'] ?></td>
                        <td class="center"><?= $da['point'] ?></td>
                        <td class="center"><?= $da['keterangan'] ?></td>
                        <td class="center"><?= $da['judul'] ?>
                            <a class="green" href="<?= base_url('index.php/artikel/down/'.$da['id']) ?>">
                                <i class="ace-icon fa fa-download bigger-130"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>