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
    <table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100% ; height:10px">
	<tbody>
		<tr>
			<td style="width:25%; vertical-align:top">
			<p style="text-align:center; vertical-align:top"><span style="font-size:14px"><span style="font-family:Times New Roman,Times,serif; vertical-align:top"><strong>PEMERINTAH KABUPATEN LEBAK</strong></span></span><br />
			<span style="font-size:22px"><span style="font-family:Times New Roman,Times,serif; vertical-align:top"><strong>DINAS PENDIDIKAN</strong></span></span><br />
			<span style="font-size:14px"><span style="font-family:Times New Roman,Times,serif; vertical-align:top"><strong>JALAN SILIWANGI (0252)280786</strong></span><br />
			<span style="font-family:Times New Roman,Times,serif; vertical-align:top"><strong>RANGKASBITUNG</strong></span></span></p>

			<hr />
			<p style="text-align:top-center">&nbsp;</p>
			</td>
			<td style="text-align:left;vertical-align:center; width:20%"><img src="<?php echo base_url(); ?>assets/img/logo_disdikbud.jpg" width="100" height="100"></td>
            <td style="text-align:right;vertical-align:top; width:10%">Model E.I</td>
		</tr>
	</tbody>
</table>
<!-- <p style="text-align:justify"><span style="font-size:12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Nomor : {nomor-surat} </span></p>
<p style="text-align:justify"><span style="font-size:12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Perihal : Kenaikan Gaji Berkala </span></p> -->
<font size="2" face="Courier New" >
<table align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nomor &nbsp; &nbsp; :  &nbsp; &nbsp; &nbsp;<?php echo $surat_kgb->nmr_surat; ?></td>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rangkasbitung, <?php echo date('d-m-Y'); ?> </td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Perihal  &nbsp;  &nbsp;:  &nbsp; &nbsp; &nbsp; Kenaikan Gaji Berkala</td>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kepada</td>
		</tr>
        <tr>
            <td></td>
			<td>Yth.&nbsp; Kepala Badan Keuangan Dan Aset Daerah </td>
		</tr>
		<tr>
        <td></td>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kabupaten Lebak</td>
		</tr>
		<tr>
        <td></td>

			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Di</td>
		</tr>
		<tr>
        <td></td>

			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rangkasbitung</td>
		</tr>
        
	</tbody>
</table>
<!-- <table align="right" border="0" cellpadding="0" cellspacing="0" style="width:40%">
	<tbody>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rangkasbitung, <?php echo date('d-m-Y', strtotime($surat_kgb->tgl_berlaku)); ?> </td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kepada</td>
		</tr>
		<tr>
			<td>Yth.&nbsp; Kepa Badan Keuangan</td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dan Aset Daerah Kabupaten Lebak</td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Di</td>
		</tr>
		<tr>
			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rangkasbitung</td>
		</tr>
	</tbody>
</table> -->

</font>
<p>&nbsp;</p>

<p style="text-align:justify">&nbsp;&nbsp;<span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dengan ini diberitahukan, bahwa berhubung dengan telah dipenuhinya masa kerja dan syarat-syarat </span></p>

<p style="text-align:justify"><span style="font-size:14px">Lainya kepada :</span></p>
<font size="2" face="Courier New" >
<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:80%">
	<tbody>
		<tr>
			<td style="width:23px ">1</td>
			<td style="width:340px">Nama dan tempat tanggal lahir</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo strtoupper($detail->nm_pegawai); ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo strtoupper($detail->tgl_lhr); ?></td>
			<td style="width:10%">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">2</td>
			<td style="width:340px">NIP</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo $detail->nip; ?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">3</td>
			<td style="width:340px">Pangkat/Jabatan</td>
			<td style="width:30px">:</td>
			<td style="width:345px">
            <?php $i = 0;
                        foreach ($pangkat as $pkt) {
                            /* Do stuff */
                            foreach ($jabatan as $jbt) {
                                /* Do stuff */
                                if (++$i == 1) break;
                            } 
                        } ?>
                        <?php echo $pkt->pangkat ?>/<?php echo ($jbt->nm_jabatan != null ? $jbt->nm_jabatan : "empty") ?>/<?php echo $detail->jg ?>
                        <!-- <?php echo strtoupper($pkt->golongan) ?>/<?php echo date('d-m-Y', strtotime($pkt->tmt_pkt)); ?> -->
                    </td>
                </td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">4</td>
			<td style="width:340px">Tempat Bekerja</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo strtoupper($detail->uk); ?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">5</td>
			<td style="width:340px">Gaji Pokok Lama</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo $surat_kgb->gj_lama?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td colspan="3" rowspan="1" style="width:821px">(atas dasar sk terakhir tenttang gaji pangkat yang ditentukan)</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">a.&nbsp; &nbsp; &nbsp; &nbsp; Oleh Pejabat</td>
			<td style="width:30px">:</td>
			<td style="width:345px">Gubernur Banten</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">b.&nbsp; &nbsp; &nbsp; &nbsp; Tanggal dan Nomor</td>
			<td style="width:30px">:</td>
			<td style="width:345px">
            <?php echo  date('d-m-Y', strtotime($detail->tgl_knk_gj)) ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; No : <?php echo $surat_kgb->nmr_dasar_gj ?>
        </td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">c.&nbsp; &nbsp; &nbsp; &nbsp; Tanggal Mulai Berlaku</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo  date('d-m-Y', strtotime($surat_kgb->tgl_berlaku))?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">d.&nbsp; &nbsp; &nbsp; &nbsp; Masa Kerja Golongan Pada Tgl. Tsb</td>
			<td style="width:30px">:</td>
			<td style="width:345px">
            <?php
                        $date1 = new DateTime($detail->tgl_knk_gj);
                        $date2 = new DateTime($detail->tgl_msk);
                        $interval = $date1->diff($date2);
                        echo $interval->y . " Tahun " . $interval->m . " Bulan";
                        ?>
        </td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td colspan="3" rowspan="1" style="text-align:center; width:340px"><strong>DIBERIKAN KENAIKAN GAJI HINGGA MEMPEROLEH</strong></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">6</td>
			<td style="width:340px">Gaji Pokok Baru</td>
			<td style="width:30px">:</td>
			<td style="width:345px">&nbsp;<?php echo $surat_kgb->gj_baru ?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
        <?php 
            function penyebut($nilai) {
                $nilai = abs($nilai);
                $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                $temp = "";
                if ($nilai < 12) {
                    $temp = " ". $huruf[$nilai];
                } else if ($nilai <20) {
                    $temp = penyebut($nilai - 10). " belas";
                } else if ($nilai < 100) {
                    $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
                } else if ($nilai < 200) {
                    $temp = " seratus" . penyebut($nilai - 100);
                } else if ($nilai < 1000) {
                    $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
                } else if ($nilai < 2000) {
                    $temp = " seribu" . penyebut($nilai - 1000);
                } else if ($nilai < 1000000) {
                    $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
                } else if ($nilai < 1000000000) {
                    $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
                } else if ($nilai < 1000000000000) {
                    $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
                } else if ($nilai < 1000000000000000) {
                    $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
                }     
                return $temp;
            }
         
            function terbilang($nilai) {
                if($nilai<0) {
                    $hasil = "minus ". trim(penyebut($nilai));
                } else {
                    $hasil = trim(penyebut($nilai));
                }     		
                return $hasil;
            }
        ?>

		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td colspan="3" rowspan="1" style="width:345px">(<?php echo terbilang($surat_kgb->gj_baru)?> rupiah)</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">&nbsp;</td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">7</td>
			<td style="width:340px">Berdasarkan Masa Kerja</td>
			<td style="width:30px">:</td>
			<td style="width:345px">
            <?php
                $date1 = new DateTime($detail->tgl_knk_pkt);
                $date2 = new DateTime($detail->tgl_msk);
                $interval = $date1->diff($date2);
                echo $interval->y . " Tahun " . $interval->m . " Bulan";
                ?>
        </td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">8</td>
			<td style="width:340px">Golongan/ Ruang</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo $pkt->golongan ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (PP Nomor 15 Tahun 2019)</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">9</td>
			<td style="width:340px">Tanggal Mulai Berlaku</td>
			<td style="width:30px">:</td>
			<td style="width:345px"><?php echo date('d-m-Y', strtotime($surat_kgb->tgl_berlaku)); ?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="width:23px">&nbsp; &nbsp; &nbsp; &nbsp;<u>KETERANGAN</u></td>
			<td style="width:30px">&nbsp;</td>
			<td style="width:345px">&nbsp;</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">a. Kenaikan gaji berikutnya</td>
			<td style="width:30px">:</td>
			<td style="width:345px">
            <?php if ($surat_kgb->tgl_berlaku != null) {
                                                            $t = strtotime($surat_kgb->tgl_berlaku);
                                                            $kgb_berikutnya = strtotime('+2 years', $t); ?>
                                                             <?php echo date('d-m-Y', $kgb_berikutnya) ?><
                                                        <?php } else { ?>
                                                           
                                                            <?php } ?>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {jika memenuhi syarat}</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">b. Yang bersangkutan adalah</td>
			<td style="width:30px">:</td>
			<td style="width:345px">Pegawai Negri Sipil</td>
			<td style="width:185px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:23px">&nbsp;</td>
			<td style="width:340px">c. Pendidikan</td>
			<td style="width:30px">:</td>
			<td style="width:345px"> <?php $i = 0;
                        foreach ($sekolah as $skl) {
                            /* Do stuff */
                            if (++$i == 1) break;
                        } ?>
                        <?php echo strtoupper($skl->tingkat) ?></td>
			<td style="width:185px">&nbsp;</td>
		</tr>
	</tbody>
</table>
</font>
<p style="text-align:justify">&nbsp;</p>



<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sesuai dengan PP Nomor 15 Tahun 2019 diharap agar kepada Pegawai tersebut dibayarkan penghasilanya Berdasarkan gaji pokok baru.</span></p>

<font size="2" face="Courier New" >
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="width:310px">&nbsp;</td>
			<td style="width:5%">&nbsp;</td>
			<td style="width:25%">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px">&nbsp;</td>
			<td style="text-align:right; width:151px"><span style="font-size:12px">A.n&nbsp;</span></td>
			<td style="width:417px"><span style="font-size:12px">BUPATI LEBAK</span></td>
		</tr>
		<tr>
			<td style="width:310px">&nbsp;</td>
			<td style="text-align:right; width:151px">&nbsp;</td>
			<td style="width:417px"><span style="font-size:12px">KEPALA DINAS PENDIDIKAN&nbsp;</span></td>
		</tr>
		<tr>
			<td style="width:310px">&nbsp;</td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px"><span style="font-size:12px">KABUPATEN LEBAK</span></td>
		</tr>
		<tr>
			<td style="width:310px">&nbsp;</td>
			<td style="width:151px">&nbsp;</td>
			<td colspan="1" rowspan="5" style="width:417px"><span style="font-size:12px">                            <img src="<?php echo base_url() ?>assets/img/barcode.jpg" width="90" height="90">
</span></td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">Tembusan disampaikan Kepada</span></td>
			<td style="width:151px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">1. Yth. Gubernur Banten</span></td>
			<td style="width:151px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">2. Yth. Kepala Kantor Regional III BKN Bandung</span></td>
			<td style="width:151px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">3. Yth Inspektur Inspektorat Kabupaten Lebak</span></td>
			<td style="width:151px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">4. Yth Kepala Badan Kepegawaian Dan Penembangan</span></td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px"><span style="font-size:12px"><?php echo $surat_kgb->nm_kadis ?></span></td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sumber Daya Manusia Kabupaten Lebak</span></td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px"><span style="font-size:12px"><?php echo $surat_kgb->pnkt ?></span></td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">5. Yth. Pembuat Daftar Gaji</span></td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px"><span style="font-size:12px">NIP : <?php echo $surat_kgb->nip_kadis ?></span></td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">6. Yth. PT Taspen</span></td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:310px"><span style="font-size:12px">7. Pegawai ybs untuk diketahui dan dipergunakan seperlunya</span></td>
			<td style="width:151px">&nbsp;</td>
			<td style="width:417px">&nbsp;</td>
		</tr>
	</tbody>
</table>
</font>


</body>

</html>