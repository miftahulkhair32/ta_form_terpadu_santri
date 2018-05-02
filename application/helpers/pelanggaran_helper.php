<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pelanggaran')){
    function pelanggaran($lgr){
        $p1a = tidak_niat_ikhlas($lgr);
        $p2a = masbuk($lgr);
        $p2b = tidak_sholat($lgr);
        $p2c = tidak_sholat_fardhu($lgr);
        $p2d = tidak_sholat_sunnah($lgr);
        $p2e = bercanda($lgr);
        $p2f = kaos_oblong($lgr);
        $p2g = tidak_tilawah($lgr);
        $p2h = tidak_setoran($lgr);
        $p2i = tidak_puasa($lgr);
        $p3a = berkata_kotor($lgr);
        $p3b = pacaran($lgr);
        $p3c = mengganggu($lgr);
        $p3d = gondrong($lgr);
        $p3e = celana_pendek($lgr);
        $p3f = porno($lgr);
        $p3g = film($lgr);
        $p3h = game($lgr);
        $p3i = bohong($lgr);
        $p3j = upload_jelek($lgr);
        $p3k = download($lgr);
        $p4a = seragam_kuliah($lgr);
        $p4b = tidak_kuliah($lgr);
        $p4c = menyontek($lgr);
        $p4e = daftar_hadir($lgr);
        $p4f = tidak_apel($lgr);
        $p4g = lab_kom_waktu($lgr);
        $p5a = tidak_mentoring($lgr);
        $p6a = tidak_keg_ospe($lgr);
        $p7a = merusak($lgr);
        $p8a = tidak_keg_bahasa($lgr);
        $p91a = membuang_sampah($lgr);
        $p91b = merusak_sarana($lgr);
        $p92a = dzolim($lgr);
        $p92b = mengejek($lgr);
        $p92c = melawan($lgr);
        $p92d = berkelahi($lgr);
        $p92e = mencuri($lgr);
        $p92f = hak_orang($lgr);
        $p92g = rokok($lgr);
        $p92h = salah_hp($lgr);
        $p92i = salah_elekro($lgr);
        $p10a = salah_uang($lgr);
        $p11a = terlambat_izin($lgr);
        $p11b = salah_izin($lgr);
        $p11c = tanpa_izin($lgr);
        $p12a = tidur_bedua($lgr);
        $p12b = tidur_kamar_lain($lgr);
        $p12c = telat_bangun($lgr);
        $p12d = tidur_pagi($lgr);
        $p12e = terlambat_tidur($lgr);
        $p12f = tidak_piket($lgr);
        $p13a = tidak_mengembalikan($lgr);
        $p13b = menggunakan_barang_tnp_izin($lgr);
        return $p1a.' '.$p2a.' '.$p2b.' '.$p2c.' '.$p2d.' '.$p2e.' '.$p2f.' '.$p2g.' '.$p2h.' '.$p2i.' '.$p3a.' '.$p3b.' '.$p3c.' '.$p3d.' '.$p3e.' '.$p3f.' '.$p3g.' '.$p3h.' '.$p3i.' '.$p3j.' '.$p3k.' '.$p4a.' '.$p4b.' '.$p4c.' '.$p4e.' '.$p4f.' '.$p4g.' '.$p5a.' '.$p6a.' '.$p7a.' '.$p8a.' '.$p91a.' '.$p91b.' '.$p92a.' '.$p92b.' '.$p92c.' '.$p92d.' '.$p92e.' '.$p92f.' '.$p92g.' '.$p92h.' '.$p92i.' '.$p10a.' '.$p11a.' '.$p11b.' '.$p11c.' '.$p12a.' '.$p12b.' '.$p12c.' '.$p12d.' '.$p12e.' '.$p12f.' '.$p13a.' '.$p13b;
    }
}

if ( ! function_exists('tidak_niat_ikhlas')){
    function tidak_niat_ikhlas($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_niat_ikhlas1')!=NULL || $CI->input->post('tidak_niat_ikhlas2')!=NULL || $CI->input->post('tidak_niat_ikhlas3')!=NULL || $CI->input->post('tidak_niat_ikhlas4')!=NULL):
                return "Tidak berniat ikhlas karena Allah";
        }
    }
}
if ( ! function_exists('masbuk')){
    function masbuk($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('masbuk1')!=NULL || $CI->input->post('masbuk2')!=NULL || $CI->input->post('masbuk3')!=NULL || $CI->input->post('masbuk4')!=NULL):
                return "Masbuk";
        }
    }
}
if ( ! function_exists('tidak_sholat')){
    function tidak_sholat($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_sholat1')!=NULL || $CI->input->post('tidak_sholat2')!=NULL || $CI->input->post('tidak_sholat3')!=NULL || $CI->input->post('tidak_sholat4')!=NULL):
                return "Tidak sholat fardhu berjama'ah";
        }
    }
}
if ( ! function_exists('tidak_sholat_fardhu')){
    function tidak_sholat_fardhu($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_sholat_fardhu1')!=NULL || $CI->input->post('tidak_sholat_fardhu2')!=NULL || $CI->input->post('tidak_sholat_fardhu3')!=NULL || $CI->input->post('tidak_sholat_fardhu4')!=NULL):
                return "Tidak sholat fardhu dengan sengaja";
        }
    }
}
if ( ! function_exists('tidak_sholat_sunnah')){
    function tidak_sholat_sunnah($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_sholat_sunnah1')!=NULL || $CI->input->post('tidak_sholat_sunnah2')!=NULL || $CI->input->post('tidak_sholat_sunnah3')!=NULL || $CI->input->post('tidak_sholat_fardhu4')!=NULL):
                return "Tidak mengikuti sholat sunnah berjama'ah (tahajud)";
        }
    }
}
if ( ! function_exists('bercanda')){
    function bercanda($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('bercanda1')!=NULL || $CI->input->post('bercanda2')!=NULL || $CI->input->post('bercanda3')!=NULL || $CI->input->post('bercanda4')!=NULL):
                return "Bercanda ketika berdo’a";
        }
    }
}
if ( ! function_exists('kaos_oblong')){
    function kaos_oblong($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('kaos_oblong1')!=NULL || $CI->input->post('kaos_oblong2')!=NULL || $CI->input->post('kaos_oblong3')!=NULL || $CI->input->post('kaos_oblong4')!=NULL):
                return "Mengenakan kaos oblong dan atau tidak memakai peci";
        }
    }
}
if ( ! function_exists('tidak_tilawah')){
    function tidak_tilawah($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_tilawah1')!=NULL || $CI->input->post('tidak_tilawah2')!=NULL || $CI->input->post('tidak_tilawah3')!=NULL || $CI->input->post('tidak_tilawah4')!=NULL):
                return "Tidak mengikuti kegiatan tilawah qur’an, dzikir dan shalat sunnah rawatib";
        }
    }
}
if ( ! function_exists('tidak_setoran')){
    function tidak_setoran($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_setoran1')!=NULL || $CI->input->post('tidak_setoran2')!=NULL || $CI->input->post('tidak_setoran3')!=NULL || $CI->input->post('tidak_setoran4')!=NULL):
                return "Tidak setoran";
        }
    }
}
if ( ! function_exists('tidak_puasa')){
    function tidak_puasa($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_puasa1')!=NULL || $CI->input->post('tidak_puasa2')!=NULL || $CI->input->post('tidak_puasa3')!=NULL || $CI->input->post('tidak_puasa4')!=NULL):
                return "Tidak shoum sunnah";
        }
    }
}
if ( ! function_exists('berkata_kotor')){
    function berkata_kotor($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('berkata_kotor1')!=NULL || $CI->input->post('berkata_kotor2')!=NULL || $CI->input->post('berkata_kotor3')!=NULL || $CI->input->post('berkata_kotor4')!=NULL):
                return "Berkata kotor/tidak sopan";
        }
    }
}
if ( ! function_exists('pacaran')){
    function pacaran($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('pacaran1')!=NULL || $CI->input->post('pacaran2')!=NULL || $CI->input->post('pacaran3')!=NULL || $CI->input->post('pacaran4')!=NULL):
                return "Berpacaran";
        }
    }
}
if ( ! function_exists('mengganggu')){
    function mengganggu($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('mengganggu1')!=NULL || $CI->input->post('mengganggu2')!=NULL || $CI->input->post('mengganggu3')!=NULL || $CI->input->post('mengganggu4')!=NULL):
                return "Mengganggu ketertiban umum";
        }
    }
}
if ( ! function_exists('gondrong')){
    function gondrong($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('gondrong1')!=NULL || $CI->input->post('gondrong2')!=NULL || $CI->input->post('gondrong3')!=NULL || $CI->input->post('gondrong4')!=NULL):
                return "Berambut gondrong";
        }
    }
}
if ( ! function_exists('celana_pendek')){
    function celana_pendek($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('celana_pendek1')!=NULL || $CI->input->post('celana_pendek2')!=NULL || $CI->input->post('celana_pendek3')!=NULL || $CI->input->post('celana_pendek4')!=NULL):
                return "Memakai celana pendek";
        }
    }
}
if ( ! function_exists('porno')){
    function porno($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('porno1')!=NULL || $CI->input->post('porno2')!=NULL || $CI->input->post('porno3')!=NULL || $CI->input->post('porno4')!=NULL):
                return "Memiliki gambar porno dan atau membuka situs porno";
        }
    }
}
if ( ! function_exists('film')){
    function film($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('film1')!=NULL || $CI->input->post('film2')!=NULL || $CI->input->post('film3')!=NULL || $CI->input->post('film4')!=NULL):
                return "Menonton film tidak islami";
        }
    }
}
if ( ! function_exists('game')){
    function game($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('game1')!=NULL || $CI->input->post('game2')!=NULL || $CI->input->post('game3')!=NULL || $CI->input->post('game4')!=NULL):
                return "Bermain games, dan atau menyalahgukan medsos";
        }
    }
}
if ( ! function_exists('bohong')){
    function bohong($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('bohong1')!=NULL || $CI->input->post('bohong2')!=NULL || $CI->input->post('bohong3')!=NULL || $CI->input->post('bohong4')!=NULL):
                return "Berbohong";
        }
    }
}
if ( ! function_exists('upload_jelek')){
    function upload_jelek($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('upload_jelek1')!=NULL || $CI->input->post('upload_jelek2')!=NULL || $CI->input->post('upload_jelek3')!=NULL || $CI->input->post('upload_jelek4')!=NULL):
                return "Mengupload hal-hal yang tidak menyenangkan";
        }
    }
}
if ( ! function_exists('download')){
    function download($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('download1')!=NULL || $CI->input->post('download2')!=NULL || $CI->input->post('download3')!=NULL || $CI->input->post('download4')!=NULL):
                return "Mendownload video/mp3 musik tidak islami";
        }
    }
}
if ( ! function_exists('seragam_kuliah')){
    function seragam_kuliah($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('seragam_kuliah1')!=NULL || $CI->input->post('seragam_kuliah2')!=NULL || $CI->input->post('seragam_kuliah3')!=NULL || $CI->input->post('seragam_kuliah4')!=NULL):
                return "Tidak menggunakan seragam kuliah";
        }
    }
}
if ( ! function_exists('tidak_kuliah')){
    function tidak_kuliah($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_kuliah1')!=NULL || $CI->input->post('tidak_kuliah2')!=NULL || $CI->input->post('tidak_kuliah3')!=NULL || $CI->input->post('tidak_kuliah4')!=NULL):
                return "Tidak mengikuti kuliah";
        }
    }
}
if ( ! function_exists('menyontek')){
    function menyontek($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('menyontek1')!=NULL || $CI->input->post('menyontek2')!=NULL || $CI->input->post('menyontek3')!=NULL || $CI->input->post('menyontek4')!=NULL):
                return "Menyontek dan melakukan tindak kecurangan ketika ujian";
        }
    }
}
if ( ! function_exists('daftar_hadir')){
    function daftar_hadir($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('daftar_hadir1')!=NULL || $CI->input->post('daftar_hadir2')!=NULL || $CI->input->post('daftar_hadir3')!=NULL || $CI->input->post('daftar_hadir4')!=NULL):
                return "Mengubah, menghilangkan daftar hadir kelas";
        }
    }
}
if ( ! function_exists('tidak_apel')){
    function tidak_apel($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_apel1')!=NULL || $CI->input->post('tidak_apel2')!=NULL || $CI->input->post('tidak_apel3')!=NULL || $CI->input->post('tidak_apel4')!=NULL):
                return "Tidak mengikuti apel pagi";
        }
    }
}
if ( ! function_exists('lab_kom_waktu')){
    function lab_kom_waktu($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('lab_kom_waktu1')!=NULL || $CI->input->post('lab_kom_waktu2')!=NULL || $CI->input->post('lab_kom_waktu3')!=NULL || $CI->input->post('lab_kom_waktu4')!=NULL):
                return "Menggunakan lab komputer tidak pada waktunya";
        }
    }
}
if ( ! function_exists('tidak_mentoring')){
    function tidak_mentoring($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_mentoring1')!=NULL || $CI->input->post('tidak_mentoring2')!=NULL || $CI->input->post('tidak_mentoring3')!=NULL || $CI->input->post('tidak_mentoring4')!=NULL):
                return "Santri tidak mengikuti kegiatan mentoring";
        }
    }
}
if ( ! function_exists('tidak_keg_ospe')){
    function tidak_keg_ospe($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_keg_ospe1')!=NULL || $CI->input->post('tidak_keg_ospe2')!=NULL || $CI->input->post('tidak_keg_ospe3')!=NULL || $CI->input->post('tidak_keg_ospe4')!=NULL):
                return "Tidak mengikuti kegiatan OSPE";
        }
    }
}
if ( ! function_exists('merusak')){
    function merusak($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('merusak1')!=NULL || $CI->input->post('merusak2')!=NULL || $CI->input->post('merusak3')!=NULL || $CI->input->post('merusak4')!=NULL):
                return "Merusak, menyalahgunakan dan menghilangkan sarana ekskul";
        }
    }
}
if ( ! function_exists('tidak_keg_bahasa')){
    function tidak_keg_bahasa($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_keg_bahasa1')!=NULL || $CI->input->post('tidak_keg_bahasa2')!=NULL || $CI->input->post('tidak_keg_bahasa3')!=NULL || $CI->input->post('tidak_keg_bahasa4')!=NULL):
                return "Tidak mengikuti kegiatan Bahasa";
        }
    }
}
if ( ! function_exists('membuang_sampah')){
    function membuang_sampah($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('membuang_sampah1')!=NULL || $CI->input->post('membuang_sampah2')!=NULL || $CI->input->post('membuang_sampah3')!=NULL || $CI->input->post('membuang_sampah4')!=NULL):
                return "Membuang sampah tidak pada tempatnya";
        }
    }
}
if ( ! function_exists('merusak_sarana')){
    function merusak_sarana($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('merusak_sarana1')!=NULL || $CI->input->post('merusak_sarana2')!=NULL || $CI->input->post('merusak_sarana3')!=NULL || $CI->input->post('merusak_sarana4')!=NULL):
                return "Merusak sarana Pesantren";
        }
    }
}
if ( ! function_exists('dzolim')){
    function dzolim($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('dzolim1')!=NULL || $CI->input->post('dzolim2')!=NULL || $CI->input->post('dzolim3')!=NULL || $CI->input->post('dzolim4')!=NULL):
                return "Mendzhalimi dan mengancam sesama santri";
        }
    }
}
if ( ! function_exists('mengejek')){
    function mengejek($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('mengejek1')!=NULL || $CI->input->post('mengejek2')!=NULL || $CI->input->post('mengejek3')!=NULL || $CI->input->post('mengejek4')!=NULL):
                return "Mengejek/mencemooh/mengolok-olok/sesama santri";
        }
    }
}
if ( ! function_exists('melawan')){
    function melawan($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('melawan1')!=NULL || $CI->input->post('melawan2')!=NULL || $CI->input->post('melawan3')!=NULL || $CI->input->post('melawan4')!=NULL):
                return "Melawan pengurus OSPE";
        }
    }
}
if ( ! function_exists('berkelahi')){
    function berkelahi($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('berkelahi1')!=NULL || $CI->input->post('berkelahi2')!=NULL || $CI->input->post('berkelahi3')!=NULL || $CI->input->post('berkelahi4')!=NULL):
                return "Berkelahi";
        }
    }
}
if ( ! function_exists('mencuri')){
    function mencuri($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('mencuri1')!=NULL || $CI->input->post('mencuri2')!=NULL || $CI->input->post('mencuri3')!=NULL || $CI->input->post('mencuri4')!=NULL):
                return "Mencuri";
        }
    }
}
if ( ! function_exists('hak_orang')){
    function hak_orang($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('hak_orang1')!=NULL || $CI->input->post('hak_orang2')!=NULL || $CI->input->post('hak_orang3')!=NULL || $CI->input->post('hak_orang4')!=NULL):
                return "Memakai hak milik orang lain tanpa izin";
        }
    }
}
if ( ! function_exists('rokok')){
    function rokok($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('rokok1')!=NULL || $CI->input->post('rokok2')!=NULL || $CI->input->post('rokok3')!=NULL || $CI->input->post('rokok4')!=NULL):
                return "Menghisap rokok";
        }
    }
}
if ( ! function_exists('salah_hp')){
    function salah_hp($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('salah_hp1')!=NULL || $CI->input->post('salah_hp2')!=NULL || $CI->input->post('salah_hp3')!=NULL || $CI->input->post('salah_hp4')!=NULL):
                return "Menyalahgunakan handphone";
        }
    }
}
if ( ! function_exists('salah_elekro')){
    function salah_elekro($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('salah_elekro1')!=NULL || $CI->input->post('salah_elekro2')!=NULL || $CI->input->post('salah_elekro3')!=NULL || $CI->input->post('salah_elekro4')!=NULL):
                return "Menyalahgunakan barang elektronik";
        }
    }
}
if ( ! function_exists('salah_uang')){
    function salah_uang($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('salah_uang1')!=NULL || $CI->input->post('salah_uang2')!=NULL || $CI->input->post('salah_uang3')!=NULL || $CI->input->post('salah_uang4')!=NULL):
                return "Menyalahgunakan uang Saku";
        }
    }
}
if ( ! function_exists('terlambat_izin')){
    function terlambat_izin($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('terlambat_izin1')!=NULL || $CI->input->post('terlambat_izin2')!=NULL || $CI->input->post('terlambat_izin3')!=NULL || $CI->input->post('terlambat_izin4')!=NULL):
                return "Terlambat datang perizinan tanpa pemberitahuan";
        }
    }
}
if ( ! function_exists('salah_izin')){
    function salah_izin($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('salah_izin1')!=NULL || $CI->input->post('salah_izin2')!=NULL || $CI->input->post('salah_izin3')!=NULL || $CI->input->post('salah_izin4')!=NULL):
                return "Menyalahgunakan perizinan";
        }
    }
}
if ( ! function_exists('tanpa_izin')){
    function tanpa_izin($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tanpa_izin1')!=NULL || $CI->input->post('tanpa_izin2')!=NULL || $CI->input->post('tanpa_izin3')!=NULL || $CI->input->post('tanpa_izin4')!=NULL):
                return "Keluar Pesantren tanpa izin";
        }
    }
}
if ( ! function_exists('tidur_bedua')){
    function tidur_bedua($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidur_bedua1')!=NULL || $CI->input->post('tidur_bedua2')!=NULL || $CI->input->post('tidur_bedua3')!=NULL || $CI->input->post('tidur_bedua4')!=NULL):
                return "Tidur berdua";
        }
    }
}
if ( ! function_exists('tidur_kamar_lain')){
    function tidur_kamar_lain($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidur_kamar_lain1')!=NULL || $CI->input->post('tidur_kamar_lain2')!=NULL || $CI->input->post('tidur_kamar_lain3')!=NULL || $CI->input->post('tidur_kamar_lain4')!=NULL):
                return "Tidur di kamar orang lain";
        }
    }
}
if ( ! function_exists('telat_bangun')){
    function telat_bangun($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('telat_bangun1')!=NULL || $CI->input->post('telat_bangun2')!=NULL || $CI->input->post('telat_bangun3')!=NULL || $CI->input->post('telat_bangun4')!=NULL):
                return "Telat bangun tidur";
        }
    }
}
if ( ! function_exists('tidur_pagi')){
    function tidur_pagi($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidur_pagi1')!=NULL || $CI->input->post('tidur_pagi2')!=NULL || $CI->input->post('tidur_pagi3')!=NULL || $CI->input->post('tidur_pagi4')!=NULL):
                return "Tidur di pagi hari";
        }
    }
}
if ( ! function_exists('terlambat_tidur')){
    function terlambat_tidur($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('terlambat_tidur1')!=NULL || $CI->input->post('terlambat_tidur2')!=NULL || $CI->input->post('terlambat_tidur3')!=NULL || $CI->input->post('terlambat_tidur4')!=NULL):
                return "Terlambat Tidur Malam";
        }
    }
}
if ( ! function_exists('tidak_piket')){
    function tidak_piket($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_piket1')!=NULL || $CI->input->post('tidak_piket2')!=NULL || $CI->input->post('tidak_piket3')!=NULL || $CI->input->post('tidak_piket4')!=NULL):
                return "Tidak melaksanakan piket";
        }
    }
}
if ( ! function_exists('tidak_mengembalikan')){
    function tidak_mengembalikan($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('tidak_mengembalikan1')!=NULL || $CI->input->post('tidak_mengembalikan2')!=NULL || $CI->input->post('tidak_mengembalikan3')!=NULL || $CI->input->post('tidak_mengembalikan4')!=NULL):
                return "Tidak mengembalikan/mengganti barang pinjaman";
        }
    }
}
if ( ! function_exists('menggunakan_barang_tnp_izin')){
    function menggunakan_barang_tnp_izin($lgr){
        $CI =& get_instance();
        switch(TRUE){
            case ($CI->input->post('menggunakan_barang_tnp_izin1')!=NULL || $CI->input->post('menggunakan_barang_tnp_izin2')!=NULL || $CI->input->post('menggunakan_barang_tnp_izin3')!=NULL || $CI->input->post('menggunakan_barang_tnp_izin4')!=NULL):
                return "Menggunakan barang-barang pesantren tanpa izin";
        }
    }
}