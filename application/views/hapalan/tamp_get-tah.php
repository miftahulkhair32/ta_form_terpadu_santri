<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Laporan Form Tahfizh</h3>
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
        <?php
        $ro = $data->row_array()?>
        <div class="table-header">
            <?= form_open('hapalan/get') ?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,$ro['bulan'],['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_submit('submit','cek',['class'=>'btn btn-primary btn-sm']) ?>
            <?= form_close() ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">NO</th>
                            <th class="center">Nama</th>
                            <th class="center">Tanggal</th>
                            <th class="center">Kesalahan</th>
                            <th class="center">Kelancaran</th>
                            <th class="center">Makna</th>
                            <th class="center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($data->result() as $da) :?>
                        <tr>
                            <td rowspan="9" class="center"><?= $no ?></td>
                            <td rowspan="9" class="center"><?= $da->nama ?></td>
                            <?php if($da->tgl1 != '0000-00-00' && $da->salah1 != '0') : ?>
                            <td class="center"><?= $da->tgl1 ?></td>
                            <td class="center"><?= $da->salah1 ?></td>
                            <td class="center"><?= $da->lancar1 ?></td>
                            <td class="center"><?= $da->makna1 ?></td>
                            <?php endif; ?>
                            <td rowspan="9" class="center">
                                <div class="action-buttons">
                                    <a class="green" href="<?= base_url('index.php/hapalan/edit/'.$da->id) ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" onclick="hapus()" href="<?= base_url('index.php/hapalan/hapus/'.$da->id) ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php if($da->tgl2 != '0000-00-00' && $da->salah2 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl2 ?></td>
                            <td class="center"><?= $da->salah2 ?></td>
                            <td class="center"><?= $da->lancar2 ?></td>
                            <td class="center"><?= $da->makna2 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl3 != '0000-00-00' && $da->salah3 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl3 ?></td>
                            <td class="center"><?= $da->salah3 ?></td>
                            <td class="center"><?= $da->lancar3 ?></td>
                            <td class="center"><?= $da->makna3 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl4 != '0000-00-00' && $da->salah4 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl4 ?></td>
                            <td class="center"><?= $da->salah4 ?></td>
                            <td class="center"><?= $da->lancar4 ?></td>
                            <td class="center"><?= $da->makna4 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl5 != '0000-00-00' && $da->salah5 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl5 ?></td>
                            <td class="center"><?= $da->salah5 ?></td>
                            <td class="center"><?= $da->lancar5 ?></td>
                            <td class="center"><?= $da->makna5 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl6 != '0000-00-00' && $da->salah6 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl6 ?></td>
                            <td class="center"><?= $da->salah6 ?></td>
                            <td class="center"><?= $da->lancar6 ?></td>
                            <td class="center"><?= $da->makna6 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl7 != '0000-00-00' && $da->salah7 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl7 ?></td>
                            <td class="center"><?= $da->salah7 ?></td>
                            <td class="center"><?= $da->lancar7 ?></td>
                            <td class="center"><?= $da->makna7 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl8 != '0000-00-00' && $da->salah8 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl8 ?></td>
                            <td class="center"><?= $da->salah8 ?></td>
                            <td class="center"><?= $da->lancar8 ?></td>
                            <td class="center"><?= $da->makna8 ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if($da->tgl9 != '0000-00-00' && $da->salah9 != '0') : ?>
                        <tr>
                            <td class="center"><?= $da->tgl9 ?></td>
                            <td class="center"><?= $da->salah9 ?></td>
                            <td class="center"><?= $da->lancar9 ?></td>
                            <td class="center"><?= $da->makna9 ?></td>
                        </tr>
                        <?php endif; ?>
                    <?php
                    $no++; 
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function hapus(){
        var x = confirm('Anda Yakin Menghapusnya ???');
        if(x){
            return true;
        } else {
            return false;
        }
    }
</script>