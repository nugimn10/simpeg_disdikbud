<html><head>
    <title></title>
    <style>
      /* #watermark { position: fixed; bottom: 0px; right: 36%; width: 25%; height: 40%;
            top: 45%; 
            text-align: center; opacity: .2; } */
      #watermark {
            position: fixed;
            top: 45%;
            color: red;
            border: black;
            border-radius: 2%;
            width: 100%;
            text-align: center;
            opacity: .1;
            transform: rotate(10deg);
            transform-origin: 50% 50%;
            z-index: -1000;
        }
    </style>
</head><body>
<!-- <div id="watermark"><img src="http://localhost/simpeg_disdikbud/assets/img/logo_disdikbud.jpg" height="100%" width="100%"></div> -->


<div id="watermark"><h1>SIMPEG DINAS PENDIDIKAN DAN KEBUDAYAAN KAB.LEBAK</h1></div>
<font size="12px" face="Courier New" >
<table style="width: 100.851%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="0">
<tbody>
<tr >
<td style="width: 100%; text-align: center;">
<p  style="font-size:12px"><strong>SURAT IZIN</strong><br \>
<strong><?php echo $detail->nm_pegawai?></strong><br \>
<strong>NIP : <?php echo $detail->nip?> </strong> <br \>
<strong>UUNTUK TANGGAL : <?php echo date('d-m-Y', strtotime($izin->dari_tgl )) ?> s.d <?php echo date('d-m-Y', strtotime($izin->sampai_tgl )) ?></strong></p>
<strong>DIBUAT TANGGAL  : <?php echo $izin->tgl_dibuat?> </strong> <br \>

</td>
</tr>
</tbody>
</table>
</font>
<font size="12px" face="Courier New" >
<table border="0" style="border-collapse: collapse; width: 101.808%; height: 259px;">
<tbody>
<tr style="height: 163px;">
<td style="width: 35%; height: 163px;"><p>Asli disampaikan dengan hormat kepada:<br />Kepala BKN dan Kanreg BKN dan tembusan<br />Disampaikan Kepada:<br />1.&nbsp; Guru yang bersangkutan <br />2.&nbsp; Sekretaris TIm Penilai Guru yang bersangkutan<br />3.&nbsp; Kepala Biro/Bagian Kepegawaian Daerah/<br />&nbsp; Kepala Kepegawaian Instansi yang bersangkutan<br />4.&nbsp; Pejabat Pengusul Angka Kredit</p></td>
<td style="width: 35%; height: 163px;"></td>
<td style="width: 30%; height: 163px;">
<p>Ditetapkan di&nbsp; &nbsp; &nbsp; : LEBAK<br />
Pada Tanggal&nbsp; &nbsp; &nbsp; : <?php echo date('d-m-Y', strtotime($surat_pak->tgl_surat ));?><br />Kepala Dinas Pendidikan dan Kebudayaan<br />Kabupaten Lebak
<br />
<br />
<br />
<br />
Drs. H. WAWAN RUSWANDI<br />Pembina Utama Muda<br />NIP. 196512051993031010</p></td>
</tr>
</tbody>
</table>
</font>
</body></html>