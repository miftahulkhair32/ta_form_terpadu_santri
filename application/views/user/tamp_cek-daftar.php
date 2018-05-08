<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter orange">Daftar User Santri</h3>
        <?php $info = $this->session->flashdata('info');
        if(!empty($info)){
            echo $info;
        } ?>
        <div class="clearfix"></div>
        <div class="table-header">
            <strong>Nama</strong> : <?= $this->session->userdata('nama'); ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">NO</th>
                            <th class="center">NIM</th>
                            <th class="center">Nama</th>
                            <th class="center">Username</th>
                            <th class="center">Email</th>
                            <th class="center">Daerah</th>
                            <th class="center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($santri->result() as $s) : ?>
                        <tr>
                            <td class="center"><?= $no ?></td>
                            <td class="center"><?= $s->nim ?></td>
                            <td class="center"><?= $s->nama ?></td>
                            <td class="center"><?= $s->username ?></td>
                            <td class="center"><?= $s->email ?></td>
                            <td class="center"><?= $s->daerah ?></td>
                            <td class="center">
                                <div class="action-buttons">
                                    <a class="green" href="<?= base_url('index.php/user/edit_user/'.$s->username); ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" onclick="hapus()" href="<?= base_url('index.php/user/hapus_user/'.$s->username); ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    $no++; 
                    endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- batas akhir table -->
        <div class="hr hr-18 dotted hr-double"></div>
        <div class="hr hr-18 dotted hr-double"></div>
        <h3 class="header smaller lighter green">Daftar User Pengasuhan</h3>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">No</th>
                            <th class="center">Nama</th>
                            <th class="center">Email</th>
                            <th class="center">Daerah</th>
                            <th class="center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $pl=1;
                    foreach($menej->result() as $m) : ?>
                        <tr>
                            <td class="center"><?= $pl ?></td>
                            <td class="center"><?= $m->nama ?></td>
                            <td class="center"><?= $m->email ?></td>
                            <td class="center"><?= $m->daerah ?></td>
                            <td class="center">
                                <div class="action-buttons">
                                    <a class="green" href="<?= base_url('index.php/user/edit_user/'.$m->username); ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" onclick="hapus()" href="<?= base_url('index.php/user/hapus_user/'.$m->username); ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    $pl++;
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function hapus(){
        var x = confirm('Anda Yakin Menghapus User ???');
        if(x){
            return true;
        } else {
            return false;
        }
    }
</script>