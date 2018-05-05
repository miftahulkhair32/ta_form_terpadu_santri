<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Laporan Form Pelanggaran</h3>
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
        $rt = $data->row_array()
        ?>
        <div class="table-header">
            <?= form_open('pelanggaran/get') ?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,$rt['bulan'],['class'=>'btn btn-primary btn-sm']) ?>
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
                            <th class="center">Jenis Pelanggaran</th>
                            <th class="center">Jumlah Point</th>
                            <th class="center">Keterangan</th>
                            <th class="center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($data->result() as $da) :?>
                        <tr>
                            <td class="center"><?= $no ?></td>
                            <td class="center"><?= $da->nama ?></td>
                            <td class="center"><?= $da->pelanggaran ?></td>
                            <td class="center"><?= $da->total ?></td>
                            <td class="center"><?= $da->keterangan ?></td>
                            <td class="center">
                                <div class="action-buttons">
                                    <a class="green" href="<?= base_url('index.php/pelanggaran/edit/'.$da->id) ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" onclick="hapus()" href="<?= base_url('index.php/pelanggaran/hapus/'.$da->id) ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
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
        confirm('Anda Yakin Menghapusnya ???');
    }
</script>