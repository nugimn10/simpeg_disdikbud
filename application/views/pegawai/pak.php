<html>

<head>
    <title></title>
    <style>
        /* #watermark { position: fixed; bottom: 0px; right: 36%; width: 25%; height: 40%;
            top: 45%; 
            text-align: center; opacity: .2; } */
        #watermark {
            position: fixed;
            top: 25%;
            color: red;
            border: black;
            border-radius: 2%;
            width: 100%;
            text-align: center;
            opacity: .1;
            transform: rotate(0deg);
            transform-origin: 50% 50%;
            z-index: -1000;
        }
    </style>
</head>

<body>
    <div id="watermark"><img src="<?php echo base_url(); ?>assets/img/logo_disdikbud.jpg"></div>


    <!-- <div id="watermark"><h1>SIMPEG DINAS PENDIDIKAN DAN KEBUDAYAAN KAB.LEBAK</h1></div> -->
    <font size="10px" face="Courier New">
        <table style="height: 35px; width: 100%; border-collapse: collapse;" border="0">
            <tbody>
                <tr style="height: 120px;">
                    <td style="width: 50%; height: 30px;">&nbsp;</td>
                    <td style="text-align:right; vertical-align:top; width: 15%; height: 30px;">
                        <p>LAMPIRAN V: </p>
                    </td>
                    <td style="width: 35%; height: 30px;">
                        <p style="font-size:10px">PERATURAN BERSAMA MENTERI PENDIDIKAN NASIONAL DAN<br />KEPALA BADAN KEPEGAWAIAN NEGARA<br />NOMOR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 03/V/PB/2010<br />NOMOR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 14 TAHUN 2010<br />TANGGAL&nbsp; &nbsp; &nbsp; &nbsp; : 06 MEI 2010</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100.851%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="0">
            <tbody>
                <tr>
                    <td style="width: 100%; text-align: center;">
                        <p style="font-size:10px"><strong>PENETAPAN ANGKA KREDIT</strong><br \>
                            <strong>DINAS PENDIDIKAN KABUPATEN LEBAK</strong><br \>
                            <strong>NOMOR : <?php echo $surat_pak->nmr_surat; ?></strong> <br \>
                            <strong>MASA PENILAIAN : <?php echo date('d-m-Y', strtotime($surat_pak->ms_penilaian_awal)) ?> s.d <?php echo date('d-m-Y', strtotime($surat_pak->ms_penilaian_akhir)) ?></strong>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 97.9615%; border-collapse: collapse; height: 675px;" border="1">
            <tbody>
                <tr style="height: 18px;">
                    <td width="5%" style="  text-align: center;" rowspan="16" align="center">I</td>
                    <td width="95%" style=" text-align: center;" colspan="6">KETERANGAN PERORANGAN</td>
                </tr>
                <tr style="height: 18px;">
                    <td width="5%" s>&nbsp;1</td>
                    <td style="border-right: hidden" width="40%">&nbsp; &nbsp;NAMA</td>
                    <td style="border-left: hidden" width="15%">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo strtoupper($detail->nm_pegawai); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;2</td>
                    <td>&nbsp; &nbsp;NIP</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo $detail->nip; ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;3</td>
                    <td>&nbsp; &nbsp; NUPTK</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo $detail->nuptk; ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;4</td>
                    <td style="width: 35.0309%; height: 18px;">&nbsp; &nbsp; NOMOR SERI KARPEG</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo $detail->noserdik; ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;5</td>
                    <td style="width: 35.0309%; height: 18px;">&nbsp; &nbsp;PANGKAT/GOL.RUANG/TMT</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;
                        <?php $i = 0;
                        foreach ($pangkat as $pkt) {
                            /* Do stuff */
                            if (++$i == 1) break;
                        } ?>
                        <?php echo strtoupper($pkt->pangkat) ?>,
                        <?php echo strtoupper($pkt->golongan) ?>/<?php echo date('d-m-Y', strtotime($pkt->tmt_pkt)); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;6</td>
                    <td style=> &nbsp; &nbsp;TEMPAT DAN TANGGAL LAHIR</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo strtoupper($detail->tpt_lhr) ?>,<?php echo date('d-m-Y', strtotime($detail->tgl_lhr)); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;7</td>
                    <td style=> &nbsp; &nbsp;JENIS KELAMIN</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;<?php echo $detail->jk ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;8</td>
                    <td style=>&nbsp; &nbsp; PENDIDIKAN TERTINGGI</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;
                        <?php $i = 0;
                        foreach ($sekolah as $skl) {
                            /* Do stuff */
                            if (++$i == 1) break;
                        } ?>
                        <?php echo strtoupper($skl->tingkat) ?>,
                        <?php echo strtoupper($skl->jurusan) ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;9</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;"> &nbsp; &nbsp;JABATAN FUNGSIONAL/TMT</td>
                    <td style="border-left: hidden">&nbsp;</td>
                    <td colspan="3">&nbsp;
                        <?php $i = 0;
                        foreach ($jabatan as $jbt) {
                            /* Do stuff */
                            if (++$i == 1) break;
                        } ?>
                        <?php echo strtoupper($jbt->nm_jabatan) ?>/
                        <?php echo date('d-m-Y', strtotime($jbt->tgl_sk_jbt)); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;10</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;"> &nbsp; &nbsp;MASA KERJA GOLONGAN</td>
                    <td style="width: 16.732%; height: 18px; text-align: left; border-left:hidden;">&nbsp; &nbsp;LAMA</td>
                    <td colspan="3">&nbsp;
                        <?php
                        $date1 = new DateTime($detail->tgl_knk_pkt);
                        $date2 = new DateTime($detail->tgl_msk);
                        $interval = $date1->diff($date2);
                        echo $interval->y . " TAHUN " . $interval->m . " BULAN";
                        ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;</td>
                    <td style=>&nbsp;</td>
                    <td style="width: 16.732%; height: 18px; text-align: left; border-left: hidden;"> &nbsp; &nbsp;BARU</td>
                    <td style="height: 18px; width: 45%;" colspan="3">&nbsp;<?php
                                                                            $date1 = new DateTime($detail->tgl_msk);
                                                                            $date2 = new DateTime('now');
                                                                            $interval = $date1->diff($date2);
                                                                            echo $interval->y . " TAHUN " . $interval->m . " BULAN ";
                                                                            ?></td>
                </tr>
                <tr>
                    <td style="width: 3.04314%;" align="center">11</td>
                    <td style="width: 35.0309%;"> &nbsp; &nbsp;JENIS GURU</td>
                    <td style="width: 16.732%; text-align: left; border-left:hidden;"></td>
                    <td style="width: 45%;" colspan="3"><?php echo strtoupper($detail->jg) ?></td>
                </tr>
                <tr style="height: 27px;">
                    <td style="width: 3.04314%; height: 27px;">12</td>
                    <td style="width: 35.0309%; height: 27px;"> TUGAS MENGAJAR</td>
                    <td style="width: 16.732%; text-align: left; height: 27px; border-left:hidden;"></td>
                    <td style="height: 27px;" colspan="3"><?php echo strtoupper($detail->tm) ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;13</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;"> UNIT KERJA</td>
                    <td style="width: 16.732%; height: 18px; text-align: left; border-left:hidden;"> SEKOLAH</td>
                    <td colspan="3">&nbsp;<?php echo strtoupper($detail->uk); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td>&nbsp;</td>
                    <td style="width: 35.0309%; height: 18px;">&nbsp;</td>
                    <td style="width: 16.732%; height: 18px; text-align: left; border-left:hidden;"> RUMAH</td>
                    <td colspan="3">&nbsp;<?php echo strtoupper($detail->alamat); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 5%; height: 18px;">&nbsp;</td>
                    <td style="width: 5%; text-align: center; height: 18px;">&nbsp;</td>
                    <td style="height: 18px; text-align: center; width: 45%;" colspan="2">PENETAPAN ANGKA KREDIT</td>
                    <td style="width: 15%; height: 18px; text-align: center;">LAMA</td>
                    <td style="width: 15%; height: 18px; text-align: center;">BARU</td>
                    <td style="width: 15%; height: 18px; text-align: center;">JUMLAH</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 4.99929%; height: 342px; text-align: left;" rowspan="16">II</td>
                    <td style="width: 3.04314%; height: 162px; text-align: left;" rowspan="9">1</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;" colspan="2">UNSUR UTAMA</td>
                    <td style="width: 12.2906%; height: 18px;">&nbsp;</td>
                    <td style="width: 21.3694%; height: 18px;">&nbsp;</td>
                    <td style="width: 15%; height: 18px;">&nbsp;</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;A.&nbsp;PENDIDIKAN</td>
                    <td style="width: 12.2906%; height: 18px;">&nbsp;</td>
                    <td style="width: 21.3694%; height: 18px;">&nbsp;</td>
                    <td style="width: 15%; height: 18px;">&nbsp;</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;Mengikuti Pendidikan dan memperoleh <Br />&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Gelar ijazah/Akta</td>
                    <?php
                    foreach ($pak as $p1) {
                        /* Do stuff */
                        if ($p1->unsur == "MENGIKUTI PENDIDIKAN DAN MEMPEROLEH GELAR/IJAZAH/AKTA") break;
                    } ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo  number_format($p1->angka_lama != null || $p1->angka_lama != 0  ? $p1->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo  number_format($p1->angka_baru != null || $p1->angka_baru != 0  ? $p1->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo number_format($jp1 = ($p1->angka_lama + $p1->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;Mengikuti Pelatihan Prajabatan</td>
                    <?php
                    foreach ($pak as $p2) {
                        /* Do stuff */
                        if ($p1->unsur == "MENGIKUTI PELATIHAN PRAJABATAN") break;
                    } ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo  number_format($p2->angka_lama != null || $p2->angka_lama != 0  ? $p2->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo  number_format($p2->angka_baru != null || $p2->angka_baru != 0  ? $p2->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp2 = ($p2->angka_lama + $p2->angka_baru) * 1000); ?></td>
                </tr>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;B.&nbsp;Pembelajaran/Bimbingan dan tugas tertentu</td>
                    <?php
                    foreach ($pak as $p31) {
                        /* Do stuff */
                        if ($p31->unsur == "MELAKSANAKAN PROSES PEMBELAJARAN") break;
                    } ?>
                    <?php
                    foreach ($pak as $p32) {
                        if ($p32->unsur == "MELAKSANAN PEROSES BIMBINGAN") break;
                    }    ?>
                    <?php
                    foreach ($pak as $p33) {
                        if ($p33->unsur == "MELAKSANAKAN TUGAS LAIN YANG RELEVAN DENGAN FUNGSI SEKOLAH/MADRASAH") break;
                    }    ?>

                    <?php
                    $p3lama = $p31->angka_lama + $p32->angka_lama + $p33->angka_lama;
                    $p3baru = $p31->angka_baru + $p32->angka_baru + $p33->angka_baru;
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p3lama != null || $p3lama != 0  ? $p3lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p3baru != null || $p3baru != 0  ? $p3baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp3 = ($p3lama + $p3baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;C.&nbsp;Pengembangan keprofesian Berkelanjutan
                    </td>
                    <td style="width: 12.2906%; height: 18px;">&nbsp;</td>
                    <td style="width: 21.3694%; height: 18px;">&nbsp;</td>
                    <td style="width: 15%; height: 18px;">&nbsp;</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;Melaksanakan Pengembangan Diri</td>
                    <?php
                    foreach ($pak as $p4) {
                        /* Do stuff */
                        if ($p4->unsur == "MELAKSANAKAN PENGEMBANGAN DIRI") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p4->angka_lama != null || $p4->angka_lama != 0  ? $p4->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p4->angka_baru != null || $p4->angka_baru != 0  ? $p4->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp4 = ($p4->angka_lama + $p4->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;Melaksanakan Publikasi Ilmiah</td>
                    <?php
                    foreach ($pak as $p5) {
                        /* Do stuff */
                        if ($p5->unsur == "MELAKSANAKAN PUBLIKASI ILMIAH") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p5->angka_lama != null || $p5->angka_lama != 0  ? $p5->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p5->angka_baru != null || $p5->angka_baru != 0  ? $p5->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp5 = ($p5->angka_lama + $p5->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 35.0309%; height: 18px;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;Melaksanakan Karya Inovatif</td>
                    <?php
                    foreach ($pak as $p6) {
                        /* Do stuff */
                        if ($p6->unsur == "MELAKSANAKAN KARYA INOVATIF") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p6->angka_lama != null || $p6->angka_lama != 0  ? $p6->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p6->angka_baru != null || $p6->angka_baru != 0  ? $p6->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp6 = ($p6->angka_lama + $p6->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 49.806%; text-align: center; height: 18px;" colspan="3">JUMLAH UNSUR UTAMA</td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_utama_lama = ($p1->angka_lama + $p2->angka_lama + $p3lama + $p4->angka_lama + $p5->angka_lama + $p6->angka_lama) * 1000;
                                                                                    echo number_format($jml_u_utama_lama) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_utama_baru = ($p1->angka_baru + $p2->angka_baru + $p3baru + $p4->angka_baru + $p5->angka_baru + $p6->angka_baru) * 1000;
                                                                                    echo number_format($jml_u_utama_baru) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_utama_jumlah = $jp1 + $jp2 + $jp3 + $jp4 + $jp5 + $jp6;
                                                                                    echo number_format($jml_u_utama_jumlah) ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 3.04314%; height: 18px; text-align: left;">2</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;" colspan="2">UNSUR PENUNJANG</td>
                    <td style="width: 12.2906%; height: 18px;">&nbsp;</td>
                    <td style="width: 21.3694%; height: 18px;">&nbsp;</td>
                    <td style="width: 15%; height: 18px;">&nbsp;</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 3.04314%; height: 18px;">&nbsp;</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;" colspan="2">Memperoleh gelar/ijazah yang tidak sesuai dengan yang diampunya</td>
                    <?php
                    foreach ($pak as $p7) {
                        /* Do stuff */
                        if ($p7->unsur == "MEMPEROLEH GELAR IJAZAH YANG TIDAK SESUAI DENGAN BIDANG YANG DIAMPUNYA") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p7->angka_lama != null || $p7->angka_lama != 0  ? $p7->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p7->angka_baru != null || $p7->angka_baru != 0  ? $p7->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp7 = ($p7->angka_lama + $p7->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 3.04314%; height: 18px;">&nbsp;</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;" colspan="2">Melaksanakan Kegiatan yang mendudkung tugas guru</td>
                    <?php
                    foreach ($pak as $p8) {
                        /* Do stuff */
                        if ($p8->unsur == "MELAKSANAKAN KEGIATAN YANG MENDUKUNG TUGAS GURU") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p8->angka_lama != null || $p8->angka_lama != 0  ? $p8->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p8->angka_baru != null || $p8->angka_baru != 0  ? $p8->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp8 = ($p8->angka_lama + $p8->angka_baru) * 1000); ?></td>
                </tr>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 3.04314%; height: 18px;">&nbsp;</td>
                    <td style="width: 35.0309%; height: 18px; text-align: left;" colspan="2">Memperoleh penghargaan/tanda jasa Satya Lancana Karya Satya</td>
                    <?php
                    foreach ($pak as $p9) {
                        /* Do stuff */
                        if ($p9->unsur == "MEMPEROLEH PENGHARGAAN/TANDA JASA SATYA LENCANA KARYA SATYA") break;
                    }
                    ?>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php echo number_format($p9->angka_lama != null || $p9->angka_lama != 0  ? $p9->angka_lama * 1000 : 0); ?></td>
                    <td style="width: 21.3694%; height: 18px;" align="center">&nbsp;<?php echo number_format($p9->angka_baru != null || $p9->angka_baru != 0  ? $p9->angka_baru * 1000 : 0); ?></td>
                    <td style="width: 15%; height: 18px;" align="center">&nbsp;<?php echo  number_format($jp9 = ($p9->angka_lama + $p9->angka_baru) * 1000); ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 49.806%; height: 18px; text-align: left;" colspan="3">JUMLAH UNSUR PENUNJANG</td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_penunjang_lama = ($p7->angka_lama + $p8->angka_lama + $p9->angka_lama) * 1000;
                                                                                    echo number_format($jml_u_penunjang_lama) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_penunjang_baru = ($p7->angka_baru + $p8->angka_baru + $p9->angka_baru) * 1000;
                                                                                    echo number_format($jml_u_penunjang_baru) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $jml_u_penunjang_jumlah = $jp7 + $jp8 + $jp9;
                                                                                    echo number_format($jml_u_penunjang_jumlah) ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 49.806%; height: 18px; text-align: left;" colspan="3">JUMLAH UNSUR UTAMA DAN PENUNJANG</td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $total_lama = $jml_u_penunjang_lama + $jml_u_utama_lama;
                                                                                    echo number_format($total_lama) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $total_baru = $jml_u_penunjang_baru + $jml_u_utama_baru;
                                                                                    echo number_format($total_baru) ?></td>
                    <td style="width: 12.2906%; height: 18px;" align="center">&nbsp;<?php $total_jml = $jml_u_penunjang_jumlah + $jml_u_utama_jumlah;
                                                                                    echo number_format($total_jml) ?></td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 4.99929%; height: 18px; text-align: left;" rowspan="2" align="center">III</td>
                    <td style="width: 175.835%; height: 18px; text-align: left;" colspan="6">DAPAT DIPERTIMBANGKAN UNTUK DINAIKAN DALAM</td>
                </tr>
                <tr style="height: 18px;">
                    <td style="width: 175.835%; height: 18px; text-align: left;" colspan="6">
                        <?php foreach ($master_golongan as $mg) { ?>
                            <?php if ($pkt->id_master_golongan + 1 == $mg->id_master_golongan) { ?>
                                <?php if ($mg->golongan == 'III/A' ||  $mg->golongan == 'III/B') { ?>
                                    <?php echo  'GURU PERTAMA /', strtoupper($mg->pangkat), ', ', $mg->golongan; ?>
                                <?php } elseif ($mg->golongan == 'III/C' ||  $mg->golongan == 'III/D') { ?>
                                    <?php echo  'GURU MUDA /', strtoupper($mg->pangkat), ', ', $mg->golongan; ?>
                                <?php } elseif ($mg->golongan == 'IV/A' ||  $mg->golongan == 'IV/B' ||  $mg->golongan == 'IV/C') { ?>
                                    <?php echo  'GURU MADYA /', strtoupper($mg->pangkat), ', ', $mg->golongan; ?>
                                <?php } else echo ""; ?>
                            <?php } ?>
                        <?php } ?>
                        / <?php echo date('d-m-Y', strtotime($surat_pak->ms_penilaian_akhir . '+1 day')); ?></td>
                </tr>
            </tbody>
        </table>
    </font>
    <font size="10px" face="Courier New">
        <table border="0" style="border-collapse: collapse; width: 101.808%; height: 259px;">
            <tbody>
                <tr style="height: 163px;">
                    <td style="width: 35%; height: 163px;">
                        <p>Asli disampaikan dengan hormat kepada:<br />Kepala BKN dan Kanreg BKN dan tembusan<br />Disampaikan Kepada:<br />1.&nbsp; Guru yang bersangkutan <br />2.&nbsp; Sekretaris TIm Penilai Guru yang bersangkutan<br />3.&nbsp; Kepala Biro/Bagian Kepegawaian Daerah/<br />&nbsp; Kepala Kepegawaian Instansi yang bersangkutan<br />4.&nbsp; Pejabat Pengusul Angka Kredit</p>
                    </td>
                    <td style="width: 35%; height: 163px;"></td>
                    <td style="width: 30%; height: 163px;">
                        <p>Ditetapkan di&nbsp; &nbsp; &nbsp; : LEBAK<br />
                            Pada Tanggal&nbsp; &nbsp; &nbsp; : <?php echo date('d-m-Y', strtotime($surat_pak->tgl_surat)); ?><br />Kepala Dinas Pendidikan<br />Kabupaten Lebak
                            <br />
                            <br />
                            <br />
                            <img src="<?php echo base_url() ?>assets/img/barcode.jpg" width="115" height="115">
                            <br />

                            <?php echo $surat_pak->nm_kadis ?><br /><?php echo $surat_pak->pnkt ?><br />NIP. <?php echo $surat_pak->nip_kadis ?>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </font>
</body>

</html>