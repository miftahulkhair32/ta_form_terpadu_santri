<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Observasi</h3>
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
            <?= form_open('observasi/proses_input') ?>
            <strong>Periode</strong> : <?= form_dropdown('bulan',$ops,'pilih',['class'=>'btn btn-primary btn-sm']) ?>
        </div>
        <?= form_hidden('menejemen',$this->session->userdata('username')) ?>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th rowspan="2" class="center">NO</th>
                            <th rowspan="2" class="center">Nama</th>
                            <th colspan="10" class="center">10 Karakter</th>
                            <th rowspan="2" class="center">Jumlah</th>
                        </tr>
                        <tr>
                            <th class="center">SALIMUL AQIDAH (Aqidah yang bersih)</th>
                            <th class="center">SHAHIHUL IBADAH (Ibadah Yang Benar)</th>
                            <th class="center">MATINUL KHULUQ (Akhlak Yang Kokoh)</th>
                            <th class="center">QAWIYYUL JISMI (Kekuatan Jasmani)</th>
                            <th class="center">MUTSAQQAFUL FIKRI (Intelek Dalam Berfikir)</th>
                            <th class="center">MUJAHADATUL LINAFSIHI ( Berjuang Melawan Hawa NafsuI)</th>
                            <th class="center">HARISHUN ‘ALA WAQTIHI ( Pandai Menjaga Waktu )</th>
                            <th class="center">MUNAZHAMUN FI SYUUNIHI ( Teratur Dalam Urusan )</th>
                            <th class="center">QODIRUN ‘ALAL KASBI ( Memiliki Kemampuan Usaha Sendiri /Mandiri)</th>
                            <th class="center">NAFI’UN LIGHAIRIHI ( Bermanfaat Bagi Orang Lain )</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($santri->result() as $sa) : ?>
                    <tr>
                        <td class="center"><?= $no ?></td>
                        <td class="center"><?= $sa->nama ?></td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('','',['class'=>'input-mini','onkeypress'=>'return ha(event)','rel'=>'we'.$no]) ?>
                        </td>
                        <td class="center">
                            <?= form_input('total'.$no,'',['class'=>'input-mini','readonly'=>'true','id'=>'tot'.$no]) ?>
                        </td>
                    </tr>
                    <?= form_hidden('nama'.$no,$sa->nama) ?>
                    <?= form_hidden('no',$no) ?>
                    <script>
                        $(document).ready(function(){
                            var a<?= $no ?> = "input[rel=we<?= $no ?>]";
                            $('input').bind('keyup',function(){
                                var av=0;
                                $(a<?= $no ?>).each(function() {
                                    if(this.value !='') av += parseInt(this.value,10);
                                $('#tot<?= $no ?>').val(av);
                                });
                            });
                        });
                    </script>
                    <?php
                    $no++; 
                    endforeach; ?>
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