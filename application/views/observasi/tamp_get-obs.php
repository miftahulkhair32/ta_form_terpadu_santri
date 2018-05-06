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
                            <th colspan="<?= $mene->num_rows() ?>" class="center">10 Karakter</th>
                            <th rowspan="2" class="center">Jumlah</th>
                            <th rowspan="2" class="center">Point Pelanggaran</th>
                            <th rowspan="2" class="center">Total</th>
                            <th rowspan="2" class="center">Aksi</th>
                        </tr>
                        <tr>
                        <?php
                        $m=0;
                        foreach($mene->result() as $me ) :?>
                            <th class="center"><?= $me->nama ?></th>
                        <?php $poi[$m] = $me->username ?>
                        <?php
                        $m++;
                        endforeach; 
                        $m--;?>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    $no=1;
                    foreach($data->result_array() as $da) : ?>
                        <tr>
                            <td class="center"><?= $no ?></td>
                            <td class="center"><?= $da['nama'] ?></td>
                            <?php
                            $com = $m;
                            $n=0;
                            $jml=0;
                            while($com>-1) : ?>
                            <td class="center"><?= $da[$poi[$n]] ?></td>
                            <?php
                            $jml += $da[$poi[$n]];
                            $n++; 
                            $com--;
                            endwhile; ?>
                            <td class="center"><?= $jml ?></td>
                            <td class="center"><?= $da['total'] ?></td>
                            <?php $total = $jml - $da['total'] ?>
                            <td class="center"><?= $total ?></td>
                            <td class="center">
                                <div class="action-buttons">
                                    <a class="green" href="<?= base_url('index.php/observasi/edit/'.$da['id']) ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" onclick="hapus()" href="<?= base_url('index.php/observasi/hapus/'.$da['id']) ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    $no++;
                    endforeach;
                    ?>
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