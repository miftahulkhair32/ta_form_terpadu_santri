<div class="row">
    <div class="col-xs-12">
        <div class="hr dotted"></div>

        <div>
            <div class="user-profile-user row" id="user-profile-1">
                <div class="col-xs-12 col-sm-4 center">
                    <div>
                        <span class="profile-picture">
                            <img class="img-responsive" alt="<?= $this->session->userdata('nama') ?>" src="<?= base_url('foto/') ?><?= $this->session->userdata('foto') ?>" width="210" />
                        </span>

                        <div class="space-4"></div>

                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                            <div class="inline position-relative">
                                <span class="white"><?= $this->session->userdata('nama') ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- akhir foto -->
                </div>
                <?php
                    $pro = $data->row() ?>
                <div class="col-xs-12 col-sm-8">
                    <div class="center">
                        <a href="<?= base_url('index.php/user/edit') ?>" class="btn btn-app btn-xs btn-success">
                            <i class="ace-icon fa fa-pencil-square-o bigger-160"></i>
                            Edit
                        </a>
                    </div>

                    <div class="space-12"></div>
                    
                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Nama Lengkap </div>
                            <div class="profile-info-value">
                                <span><?= $pro->nama ?></span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Username </div>
                            <div class="profile-info-value">
                                <span><?= $pro->username ?></span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> NIM </div>
                            <div class="profile-info-value">
                                <span><?= $pro->nim ?></span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Email </div>
                            <div class="profile-info-value">
                                <span><?= $pro->email ?></span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Daerah </div>
                            <div class="profile-info-value">
                                <span><?= $pro->daerah ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function hapus(){
        confirm('Anda Yakin Menghapus User ???');
    }
</script>