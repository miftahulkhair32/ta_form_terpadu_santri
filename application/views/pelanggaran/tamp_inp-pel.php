<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Pelanggaran</h3>
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
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th rowspan="3" class="center">NO</th>
                            <th rowspan="3" class="center">Jenis Pelanggaran</th>
                            <th rowspan="3" class="center">Point</th>
                            <th colspan="8" class="center">Pelanggaran Per Pekan</th>
                        </tr>
                        <tr>
                            <th colspan="2" class="center">Pekan I</th>
                            <th colspan="2" class="center">Pekan II</th>
                            <th colspan="2" class="center">Pekan III</th>
                            <th colspan="2" class="center">Pekan IV & V</th>
                        </tr>
                        <tr>
                            <th class="center">Ya</th>
                            <th class="center">Jumlah</th>
                            <th class="center">Ya</th>
                            <th class="center">Jumlah</th>
                            <th class="center">Ya</th>
                            <th class="center">Jumlah</th>
                            <th class="center">Ya</th>
                            <th class="center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2" class="center">1</td>
                            <td colspan="10"><strong>AQIDAH</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidak berniat ikhlas karena Allah dalam menjalankan aktivitas sehari-hari</small></td>
                            <td class="center">10</td>
                            <td class="center">
                                <?= form_input('tidak_niat_ikhlas1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'1a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t1a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_niat_ikhlas2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'1a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t1a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_niat_ikhlas3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'1a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t1a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_niat_ikhlas4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'1a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t1a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="10" class="center">2</td>
                            <td colspan="10"><strong>IBADAH</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Terlambat sholat berjama'ah/masbuk</small></td>
                            <td class="center">1</td>
                            <td class="center">
                                <?= form_input('masbuk1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('masbuk2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('masbuk3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('masbuk4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Tidak sholat fardhu berjama'ah</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('tidak_sholat1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>c. Tidak sholat fardhu dengan sengaja</small></td>
                            <td class="center">75</td>
                            <td class="center">
                                <?= form_input('tidak_sholat_fardhu1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_fardhu2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_fardhu3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_fardhu4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>d. Tidak mengikuti sholat sunnah berjama'ah (tahajud) yang telah ditentukan di masjid</small></td>
                            <td class="center">3</td>
                            <td class="center">
                                <?= form_input('tidak_sholat_sunnah1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2d1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2d1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_sunnah2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2d2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2d2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_sunnah3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2d3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2d3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_sholat_sunnah4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2d4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2d4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>e. Bercanda ketika berdo’a</small></td>
                            <td class="center">3</td>
                            <td class="center">
                                <?= form_input('bercanda1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2e1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2e1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bercanda2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2e2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2e2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bercanda3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2e3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2e3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bercanda4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2e4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2e4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>f. Mengenakan kaos oblong dan atau tidak memakai peci pada waktu shalat berjama’ah magrib, isya dan subuh.</small></td>
                            <td class="center">2</td>
                            <td class="center">
                                <?= form_input('kaos_oblong1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2f1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2f1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kaos_oblong2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2f2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2f2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kaos_oblong3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2f3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2f3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kaos_oblong4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2f4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2f4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>g. Tidak mengikuti kegiatan tilawah qur’an, dzikir dan shalat sunnah rawatib di masjid </small></td>
                            <td class="center">1</td>
                            <td class="center">
                                <?= form_input('tidak_tilawah1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2g1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2g1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_tilawah2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2g2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2g2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_tilawah3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2g3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2g3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_tilawah4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2g4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2g4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>h. Tidak setoran hafalan</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('tidak_setoran1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2h1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2h1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_setoran2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2h2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2h2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_setoran3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2h3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2h3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_setoran4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2h4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2h4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>i. Tidak shoum sunnah yg ditetapkan Pesantren tanpa udzur syar’i</small></td>
                            <td class="center">3</td>
                            <td class="center">
                                <?= form_input('tidak_puasa1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2i1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_puasa2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2i2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_puasa3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2i3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_puasa4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'2i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t2i4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="12" class="center">3</td>
                            <td colspan="10"><strong>AKHLAK</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Berkata kotor/tidak sopan</small></td>
                            <td class="center">12</td>
                            <td class="center">
                                <?= form_input('berkata_kotor1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkata_kotor2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkata_kotor3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkata_kotor4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Berpacaran</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('pacaran1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('pacaran2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('pacaran3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('pacaran4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>c. Mengganggu ketertiban umum</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('mengganggu1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengganggu2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengganggu3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengganggu4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>d. Berambut gondrong</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('gondrong1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3d1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3d1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('gondrong2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3d2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3d2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('gondrong3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3d3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3d3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('gondrong4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3d4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3d4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>e. Memakai celana pendek selutut</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('celana_pendek1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3e1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3e1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('celana_pendek2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3e2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3e2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('celana_pendek3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3e3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3e3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('celana_pendek4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3e4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3e4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>f. Membuat buku bacaan atau memiliki gambar porno dan atau membuka situs porno</small></td>
                            <td class="center">49</td>
                            <td class="center">
                                <?= form_input('porno1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3f1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3f1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('porno2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3f2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3f2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('porno3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3f3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3f3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('porno4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3f4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3f4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>g. Menonton film tidak islami</small></td>
                            <td class="center">27</td>
                            <td class="center">
                                <?= form_input('film1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3g1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3g1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('film2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3g2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3g2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('film3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3g3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3g3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('film4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3g4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3g4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>h. Bermain games, dan atau menyalahgukan medsos facebook, whatapps, bbm, email dan sejenisnya.</small></td>
                            <td class="center">10</td>
                            <td class="center">
                                <?= form_input('game1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3h1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3h1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('game2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3h2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3h2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('game3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3h3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3h3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('game4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3h4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3h4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>i. Berbohong</small></td>
                            <td class="center">25</td>
                            <td class="center">
                                <?= form_input('bohong1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3i1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bohong2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3i2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bohong3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3i3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('bohong4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3i4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>j. Mengupload hal-hal yang tidak menyenangkan  dan  menimbulkan keresahan</small></td>
                            <td class="center">100</td>
                            <td class="center">
                                <?= form_input('upload_jelek1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3j1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3j1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('upload_jelek2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3j2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3j2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('upload_jelek3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3j3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3j3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('upload_jelek4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3j4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3j4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>k. Mendownload video/mp3 musik tidak islami</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('download1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3k1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3k1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('download2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3k2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3k2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('download3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3k3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3k3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('download4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'3k4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t3k4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="8" class="center">4</td>
                            <td colspan="10"><strong>PENDIDIKAN DAN PENGAJARAN</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidak menggunakan seragam kuliah</small></td>
                            <td class="center">3</td>
                            <td class="center">
                                <?= form_input('seragam_kuliah1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('seragam_kuliah2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('seragam_kuliah3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('seragam_kuliah4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Tidak mengikuti kuliah selama 1 jam mata kuliah dan kelipatannya</small></td>
                            <td class="center">3</td>
                            <td class="center">
                                <?= form_input('tidak_kuliah1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_kuliah2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_kuliah3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_kuliah4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>c. Menyontek dan melakukan tindak kecurangan ketika ujian berlangsung</small></td>
                            <td class="center">50</td>
                            <td class="center">
                                <?= form_input('menyontek1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menyontek2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menyontek3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menyontek4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>d. Tidak menghafalkan Al Qur’an  sesuai dengan target Pesantren (TIDAK LULUS)</small></td>
                            <td class="center"></td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4d1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4d1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4d2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4d2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4d3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4d3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4d4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4d4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>e. Mengubah, menghilangkan daftar hadir kelas</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('daftar_hadir1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4e1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4e1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('daftar_hadir2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4e2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4e2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('daftar_hadir3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4e3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4e3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('daftar_hadir4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4e4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4e4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>f. Tidak mengikuti pendampingan alumni & apel pagi</small></td>
                            <td class="center">10</td>
                            <td class="center">
                                <?= form_input('tidak_apel1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4f1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4f1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_apel2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4f2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4f2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_apel3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4f3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4f3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_apel4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4f4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4f4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>g. Menggunakan lab komputer tidak pada waktunya</small></td>
                            <td class="center">23</td>
                            <td class="center">
                                <?= form_input('lab_kom_waktu1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4g1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4g1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lab_kom_waktu2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4g2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4g2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lab_kom_waktu3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4g3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4g3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lab_kom_waktu4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'4g4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t4g4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="center">5</td>
                            <td colspan="10"><strong>HALAQAH TARBAWIYAH</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Santri tidak mengikuti kegiatan mentoring & diskusi</small></td>
                            <td class="center">6</td>
                            <td class="center">
                                <?= form_input('tidak_mentoring1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'5a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t5a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mentoring2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'5a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t5a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mentoring3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'5a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t5a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mentoring4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'5a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t5a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="center">6</td>
                            <td colspan="10"><strong>KEORGANISASIAN</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidak mengikuti kegiatan OSPE</small></td>
                            <td class="center">2</td>
                            <td class="center">
                                <?= form_input('tidak_keg_ospe1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'6a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t6a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_ospe2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'6a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t6a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_ospe3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'6a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t6a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_ospe4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'6a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t6a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="center">7</td>
                            <td colspan="10"><strong>EKSTRAKURIKULER</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Merusak, menyalahgunakan dan menghilangkan sarana ekskul seperti alat olah raga</small></td>
                            <td class="center">25</td>
                            <td class="center">
                                <?= form_input('merusak1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'7a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t7a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'7a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t7a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'7a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t7a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'7a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t7a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="center">8</td>
                            <td colspan="10"><strong>BAHASA</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidak mengikuti kegiatan Bahasa</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('tidak_keg_bahasa1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'8a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t8a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_bahasa2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'8a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t8a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_bahasa3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'8a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t8a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_keg_bahasa4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'8a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t8a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="14" class="center">9</td>
                            <td colspan="10"><strong>6 K (KEBERSIHAN, KEINDAHAN, KEAMANAN, KETERTIBAN, KEKELUARGAAN dan KESEHATAN)</strong></td>
                        </tr>
                        <tr>
                            <td colspan="10"><strong>9.1 Kebersihan, Keindahan dan Kesehatan</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Membuang sampah tidak pada tempatnya</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('membuang_sampah1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9aa1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9aa1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('membuang_sampah2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9aa2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9aa2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('membuang_sampah3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9aa3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9aa3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('membuang_sampah4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9aa4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9aa4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Merusak sarana Pesantren</small></td>
                            <td class="center">35</td>
                            <td class="center">
                                <?= form_input('merusak_sarana1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9ba1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9ba1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak_sarana2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9ba2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9ba2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak_sarana3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9ba3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9ba3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('merusak_sarana4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9ba4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9ba4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10"><strong>9.2 Keamanan, Ketertiban dan Kekeluargaan</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Mendzhalimi dan mengancam sesama santri</small></td>
                            <td class="center">25</td>
                            <td class="center">
                                <?= form_input('dzolim1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('dzolim2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('dzolim3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('dzolim4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Mengejek/mencemooh/ mengolok-olok/ sesama santri</small></td>
                            <td class="center">20</td>
                            <td class="center">
                                <?= form_input('mengejek1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengejek2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengejek3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mengejek4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>c. Melawan pengurus OSPE</small></td>
                            <td class="center">30</td>
                            <td class="center">
                                <?= form_input('melawan1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('melawan2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('melawan3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('melawan4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>d. Berkelahi</small></td>
                            <td class="center">27</td>
                            <td class="center">
                                <?= form_input('berkelahi1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9d1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9d1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkelahi2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9d2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9d2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkelahi3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9d3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9d3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('berkelahi4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9d4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9d4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>e. Mencuri</small></td>
                            <td class="center">45</td>
                            <td class="center">
                                <?= form_input('mencuri1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9e1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9e1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mencuri2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9e2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9e2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mencuri3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9e3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9e3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('mencuri4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9e4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9e4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>f. Memakai hak milik orang lain tanpa izin</small></td>
                            <td class="center">20</td>
                            <td class="center">
                                <?= form_input('hak_orang1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9f1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9f1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('hak_orang2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9f2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9f2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('hak_orang3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9f3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9f3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('hak_orang4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9f4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9f4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>g. Membawa, memiliki dan menghisap rokok</small></td>
                            <td class="center">100</td>
                            <td class="center">
                                <?= form_input('rokok1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9g1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9g1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('rokok2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9g2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9g2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('rokok3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9g3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9g3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('rokok4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9g4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9g4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>h. Menyalahgunakan handphone</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('salah_hp1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9h1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9h1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_hp2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9h2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9h2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_hp3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9h3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9h3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_hp4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9h4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9h4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>i. Menyalahgunakan barang elektronik yang diizinkan</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('salah_elekro1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9i1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9i1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_elekro2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9i2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9i2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_elekro3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9i3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9i3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_elekro4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'9i4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t9i4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="center">10</td>
                            <td colspan="10"><strong>KEUANGAN</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Menyalahgunakan uang Saku</small></td>
                            <td class="center">49</td>
                            <td class="center">
                                <?= form_input('salah_uang1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'10a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t10a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_uang2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'10a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t10a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_uang3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'10a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t10a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_uang4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'10a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t10a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="center">11</td>
                            <td colspan="10"><strong>PERIJINAN</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Terlambat datang perizinan tanpa pemberitahuan dalam perhari</small></td>
                            <td class="center">9</td>
                            <td class="center">
                                <?= form_input('terlambat_izin1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_izin2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_izin3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_izin4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Menyalahgunakan perizinan</small></td>
                            <td class="center">16</td>
                            <td class="center">
                                <?= form_input('salah_izin1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_izin2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_izin3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('salah_izin4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11b4','rel'=>'p4']) ?>
                            </td>
                        </tr>t
                        <tr>
                            <td><small>c. Keluar Pesantren tanpa izin</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('tanpa_izin1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tanpa_izin2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tanpa_izin3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tanpa_izin4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'11c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t11c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="7" class="center">12</td>
                            <td colspan="10"><strong>KEASRAMAAN DAN KELAS</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidur berdua dalam satu tempat tidur</small></td>
                            <td class="center">14</td>
                            <td class="center">
                                <?= form_input('tidur_bedua1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_bedua2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_bedua3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_bedua4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Tidur di kamar orang lain</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('tidur_kamar_lain1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_kamar_lain2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_kamar_lain3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_kamar_lain4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>c. Telat bangun tidur</small></td>
                            <td class="center">2</td>
                            <td class="center">
                                <?= form_input('telat_bangun1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12c1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12c1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('telat_bangun2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12c2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12c2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('telat_bangun3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12c3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12c3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('telat_bangun4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12c4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12c4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>d. Tidur di pagi hari</small></td>
                            <td class="center">5</td>
                            <td class="center">
                                <?= form_input('tidur_pagi1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12d1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12d1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_pagi2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12d2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12d2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_pagi3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12d3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12d3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidur_pagi4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12d4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12d4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>e. Terlambat Tidur Malam</small></td>
                            <td class="center">2</td>
                            <td class="center">
                                <?= form_input('terlambat_tidur1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12e1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12e1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_tidur2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12e2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12e2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_tidur3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12e3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12e3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('terlambat_tidur4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12e4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12e4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>f. Tidak melaksanakan piket & tidak mengikuti kerjabakti</small></td>
                            <td class="center">10</td>
                            <td class="center">
                                <?= form_input('tidak_piket1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12f1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12f1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_piket2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12f2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12f2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_piket3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12f3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12f3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_piket4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'12f4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t12f4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="center">13</td>
                            <td colspan="10"><strong>KEPEMILIKAN</strong></td>
                        </tr>
                        <tr>
                            <td><small>a. Tidak mengembalikan/mengganti barang pinjaman sesuai kesepakatan</small></td>
                            <td class="center">29</td>
                            <td class="center">
                                <?= form_input('tidak_mengembalikan1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13a1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13a1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mengembalikan2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13a2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13a2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mengembalikan3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13a3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13a3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak_mengembalikan4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13a4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13a4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td><small>b. Menggunakan barang-barang pesantren tanpa izin</small></td>
                            <td class="center">26</td>
                            <td class="center">
                                <?= form_input('menggunakan_barang_tnp_izin1','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13b1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13b1','rel'=>'p1']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menggunakan_barang_tnp_izin2','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13b2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13b2','rel'=>'p2']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menggunakan_barang_tnp_izin3','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13b3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13b3','rel'=>'p3']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('menggunakan_barang_tnp_izin4','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'13b4']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'t13b4','rel'=>'p4']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center"><strong>TOTAL PER PEKAN</strong></td>
                            <td colspan="2" class="center">PEKAN I</td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'tp1','rel'=>'pekan']) ?>
                            </td>
                            <td class="center">PEKAN II</td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'tp2','rel'=>'pekan']) ?>
                            </td>
                            <td class="center">PEKAN III</td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'tp3','rel'=>'pekan']) ?>
                            </td>
                            <td class="center">PEKAN IV & V</td>
                            <td class="center">
                                <?= form_input('','',['class'=>'input-mini','disabled'=>'disabled','id'=>'tp4','rel'=>'pekan']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center"><strong>TOTAL PER BULAN</strong></td>
                            <td class="center" colspan="9">
                                <?= form_input('total_bulan','',['class'=>'col-xs-12','readonly'=>'true','id'=>'tb']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center"><strong>KETERANGAN</strong></td>
                            <td class="center" colspan="9">
                                <?= form_input('keterangan','',['class'=>'col-xs-12','placeholder'=>'KETERANGAN']) ?>
                            </td>
                        </tr>
                        <?= form_hidden('bulan',$bulan) ?>
                        <?= form_hidden('nama',$this->session->userdata('nama')) ?>
                    </tbody>
                </table>
                <div>
                    <?= form_submit('submit','KIRIM',['class'=>'btn btn-primary']) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    function ha(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
<script src="<?= base_url('asset/js/pelanggaran.js')?>"></script>