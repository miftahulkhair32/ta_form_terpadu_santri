<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Partisipasi Harian</h3>
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
                            <th class="center">Program Kegiatan</th>
                            <th class="center">Hadir</th>
                            <th class="center">Terlambat</th>
                            <th class="center">Tidak Hadir</th>
                            <th class="center">Kurang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><strong>Pekan 1</strong></td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'a']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','id'=>'ta','readonly'=>'true']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 2</strong></td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'b']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','id'=>'tb','readonly'=>'true']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 3</strong></td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'c']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','id'=>'tc','readonly'=>'true']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 4</strong></td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'d']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','id'=>'td','readonly'=>'true']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Total</strong></td>
                            <td class="center">
                                <?= form_input('total','',['class'=>'col-xs-12','readonly'=>'true','id'=>'te']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Keterangan</strong></td>
                            <td colspan="3">
                                <?= form_input('keterangan','',['class'=>'col-xs-12','placeholder'=>'KETERANGAN']) ?>
                            </td>
                            <td class="center">nb.Kurang = Hadir - 110</td>
                        </tr>
                    </tbody>
                </table>
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
<script>
$(document).ready(function(){
    $('#a').bind('keyup',function() {
        var va;
        if(this.value !='') va = parseInt(this.value,10) - 110;
        $('#ta').val(va);
    });
    $('#b').bind('keyup',function() {
        var vb;
        if(this.value !='') vb = parseInt(this.value,10) - 110;
        $('#tb').val(vb);
    });
    $('#c').bind('keyup',function() {
        var vc;
        if(this.value !='') vc = parseInt(this.value,10) - 110;
        $('#tc').val(vc);
    });
    $('#d').bind('keyup',function() {
        var vd;
        if(this.value !='') vd = parseInt(this.value,10) - 110;
        $('#td').val(vd);
    });
    $('#hd').bind('keyup',function() {
        var ve;
        if(this.value !='') ve += parseInt(this.value,10);
        $('#te').val(ve));
    });
});
</script>