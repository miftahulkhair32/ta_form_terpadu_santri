<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Laporan Form Artikel</h3>
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
        <?php $hj = $data->row_array()?>
        <div class="table-header">
            <?= form_open('artikel/get') ?>
            <strong>Periode</strong> : <?= form_dropdown('bln',$ops,$hj['bulan'],['class'=>'btn btn-primary btn-sm']) ?>
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
                            <th class="center">Judul</th>
                            <th class="center">File</th>
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
                        <td class="center"><?= $da->judul ?></td>
                        <td class="center"><?= $da->file ?></td>
                        <td class="center">
                            <div class="action-buttons">
                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-download bigger-130"></i>
                                </a>
                                <a class="red" href="#">
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