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
                <?= form_open('partisipasi/proses_input') ?>
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
                    <?= form_hidden('nama',$this->session->userdata('nama')) ?>
                    <?= form_hidden('bulan',$bulan) ?>
                    <tbody>
                        <tr>
                            <td class="center"><strong>Pekan 1</strong></td>
                            <td class="center">
                                <?= form_input('hadir1','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'a','rel'=>'hd']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lambat1','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'ter']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak1','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'bc']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kurang1','',['class'=>'col-xs-12','id'=>'ta','readonly'=>'true','rel'=>'jk']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 2</strong></td>
                            <td class="center">
                                <?= form_input('hadir2','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'b','rel'=>'hd']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lambat2','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'ter']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak2','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'bc']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kurang2','',['class'=>'col-xs-12','id'=>'tb','readonly'=>'true','rel'=>'jk']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 3</strong></td>
                            <td class="center">
                                <?= form_input('hadir3','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'c','rel'=>'hd']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lambat3','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'ter']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak3','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'bc']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kurang3','',['class'=>'col-xs-12','id'=>'tc','readonly'=>'true','rel'=>'jk']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Pekan 4</strong></td>
                            <td class="center">
                                <?= form_input('hadir4','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','id'=>'d','rel'=>'hd']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('lambat4','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'tel']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('tidak4','',['class'=>'col-xs-12','onkeypress'=>'return ha(event)','rel'=>'bc']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('kurang4','',['class'=>'col-xs-12','id'=>'td','readonly'=>'true','rel'=>'jk']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"><strong>Total</strong></td>
                            <td class="center">
                                <?= form_input('total','',['class'=>'col-xs-12','readonly'=>'true','id'=>'te']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true','id'=>'tt']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true','id'=>'tp']) ?>
                            </td>
                            <td class="center">
                                <?= form_input('','',['class'=>'col-xs-12','readonly'=>'true','id'=>'tjk']) ?>
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
    var hd = "input[rel=hd]";
    $(hd).bind('keyup',function() {
        var ve=0;
        $(hd).each(function() {
            if(this.value !='') ve += parseInt(this.value,10);
        });
        $('#te').val(ve);
    });
    var hr = "input[rel=ter]";
    $(hr).bind('keyup',function() {
        var vr=0;
        $(hr).each(function() {
            if(this.value !='') vr += parseInt(this.value,10);
        });
        $('#tt').val(vr);
    });
    var bc = "input[rel=bc]";
    $(bc).bind('keyup',function() {
        var vbc=0;
        $(bc).each(function() {
            if(this.value !='') vbc += parseInt(this.value,10);
        });
        $('#tp').val(vbc);
    });
    var jk = "input[rel=jk]";
    $('input').bind('keyup',function() {
        var vjk=0;
        $(jk).each(function() {
            if(this.value !='') vjk += parseInt(this.value,10);
        });
        $('#tjk').val(vjk);
    });
});
</script>