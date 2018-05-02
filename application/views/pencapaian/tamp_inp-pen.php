<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Input Form Pencapaian Target</h3>
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
                <?= form_open('pencapaian/proses_input') ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th rowspan="2" colspan="2" class="center">NO</th>
                            <th rowspan="2" class="center">RENCANA</th>
                            <th rowspan="2" class="center">TARGET</th>
                            <th class="center">PENCAPAIAN</th>
                        </tr>
                        <tr>
                            <th class="center">NILAI 1-100</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">A</td>
                            <td></td>
                            <td colspan="4"><strong>Pelaksanaan Program Kegiatan Santri</strong></td>
                        </tr>
                        <tr>
                            <td class="center"></td>
                            <td></td>
                            <td>Program Harian</td>
                            <td>Mengikuti seluruh kegiatan harian tanpa terlambat</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"></td>
                            <td></td>
                            <td>Program Pekanan</td>
                            <td>Mengikuti seluruh kegiatan pekanan tanpa terlambat</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"></td>
                            <td></td>
                            <td>Program Bulanan</td>
                            <td>Mengikuti seluruh kegiatan bulanan tanpa terlambat</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center"></td>
                            <td></td>
                            <td>Program Tahunan</td>
                            <td>Mengikuti seluruh kegiatan tahunan tanpa terlambat</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">B</td>
                            <td></td>
                            <td><strong>Tahsin Tilawah</strong></td>
                            <td>Menguasai bacaan Mad</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">C</td>
                            <td></td>
                            <td><strong>Tahfidz Qur'an</strong></td>
                            <td>Hafal minimal 5 hal & paham maknanya</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">D</td>
                            <td></td>
                            <td colspan="4"><strong>Aplikasi 10 Karakter Muslim Tangguh</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">1</td>
                            <td colspan="4"><strong>SALIMUL AQIDAH (Aqidah yang bersih)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Allah dulu, allah lagi, allah terus dalam segala aktivitas</td>
                            <td>Bedo'a dulu, ikhtiar maksimal, tawakal berserah diri, dan terus berharap kepada allah dalam melakukan segala aktivitas</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">2</td>
                            <td colspan="4"><strong>SHAHIHUL IBADAH  (Ibadah Yang Benar)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Shalat</td>
                            <td>Memahami dan mengerti cara shalat yang benar dan paham bacaannya</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Shaum</td>
                            <td>Paham keutamaan shaum sunnah & melaksanakan shaum tiap senin kamis</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Tilawah & Tadabbur Qur'an</td>
                            <td>Tilawah 4 Juz Per bulan & membaca terjemahnya</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Dzikir dan Muhasabah</td>
                            <td>Hafal bacaan dzikir setelah shalat fardhu & Intropeksi diri tiap malam</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">3</td>
                            <td colspan="4"><strong>MATINUL KHULUQ (Akhlak Yang Kokoh)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Adab Muamalah</td>
                            <td>Salam, sapa, senyum, menolong dan berbagi</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Kewarganegaraan</td>
                            <td>Mengetahui ragam budaya daerah teman petik</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Penampilan Diri</td>
                            <td>Rapih, sopan dan wangi</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Adab Makan</td>
                            <td>Memperaktekan cara makan rasulullah</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Adab Tidur</td>
                            <td>Memperaktekan cara tidur rasulullah</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Adab Di Kamar Mandi</td>
                            <td>Memperaktekan cara mandi dan bersuci rasulullah</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">4</td>
                            <td colspan="4"><strong>QAWIYYUL JISMI (Kekuatan Jasmani)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>OLAHRAGA</td>
                            <td>tiap pagi olah raga 10 menit</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>KESEHATAN</td>
                            <td>memahami pola hidup sehat</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">5</td>
                            <td colspan="4"><strong>MUTSAQQAFUL FIKRI  (Intelek Dalam Berfikir)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Pencapaian Target Belajar IT</td>
                            <td>Menguasai teori dan praktek, nilai 90</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Pencapaian Target Belajar Kepesantrenan / Ilmu Agama Islam</td>
                            <td>Menguasai teori dan praktek, nilai 90</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Life Skill Bahasa</td>
                            <td>hafal 100 kosakata bhs inggris</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Koleksi Buku/Artikel Bacaan Agama</td>
                            <td>mengkoleksi 5 artikel islam</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Koleksi Buku/Artikel Bacaan Umum</td>
                            <td>mengkoleksi 5 artikel umum</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Wawasan Global / Pengetahuan</td>
                            <td>Membaca dan mengetahui wawasan global tentang IT</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">6</td>
                            <td colspan="4"><strong>MUJAHADATUL LINAFSIHI  ( Berjuang Melawan Hawa Nafsu)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Melawan Hawa Nafsu</td>
                            <td>Sabar dalam beribadah</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">7</td>
                            <td colspan="4"><strong>HARISHUN ‘ALA WAQTIHI  ( Pandai Menjaga Waktu )</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Manajemen Waktu</td>
                            <td>Memiliki jadwal pribadi di waktu senggang</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">8</td>
                            <td colspan="4"><strong>MUNAZHAMUN FI SYUUNIHI  ( Teratur Dalam Urusan )</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>KEDISIPLINAN</td>
                            <td>Tepat waktu dalam setiap kegiatan</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>ORGANISASI SANTRI PeTIK (OSP)</td>
                            <td>Tertanam jiwa kepemimpinan, misal bisa mempengaruhi orang lain</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">9</td>
                            <td colspan="4"><strong>QODIRUN ‘ALAL KASBI ( Memiliki Kemampuan Usaha Sendiri /Mandiri)</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Berjiwa Kewirausahaan</td>
                            <td>Paham karakter pengusaha sukses</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">10</td>
                            <td colspan="4"><strong>NAFI’UN LIGHAIRIHI ( Bermanfaat Bagi Orang Lain )</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>MEMILIKI MANFAAT</td>
                            <td>5 manfaat untuk PeTIK</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Kepedulian Sosial</td>
                            <td>Bersihkan jalananan di RT I</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">E</td>
                            <td></td>
                            <td colspan="4"><strong>Jaringan Sahabat Nasional & Internasional</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2">Memiliki 5 teman IT di Indonesia dan di dunia</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">F</td>
                            <td></td>
                            <td colspan="4"><strong>Rencana Khusus Individu</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Mencoba selalu membangunkan teman untuk sholat tahajud</td>
                            <td>Setiap Hari</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Mengisi waktu luang untuk Menghafal</td>
                            <td>Setiap Hari</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2">Hafal Juz 30 Bulan September</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2">Memperdalam Ilmu Kaligrafi di waktu luang</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2">Menjadikan seluruh kegiatan di PeTIK sebagai sarana pendekatan diri kepada Allah dan sebagai pembentuk kepribadian saya</td>
                            <td>
                                <?= form_input('','',['class'=>'col-xs-12','placeholder'=>'0','onkeypress'=>'return ha(event)','rel'=>'jumlah']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="center" colspan="4"><strong>TOTAL NILAI</strong></td>
                            <td>
                                <?= form_input('total_nilai','',['class'=>'col-xs-12','readonly'=>'true','id'=>'total']) ?>
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
<script>
    $(document).ready(function(){
        var inp = "input[rel=jumlah]";

        $(inp).bind('keyup',function() {
            var val=0;
            $(inp).each(function() {
                if(this.value !='') val += parseInt(this.value,10);
            });
            $('#total').val(val);
        });
    });
</script>