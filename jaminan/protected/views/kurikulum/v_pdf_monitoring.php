<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p>5.4 Sistem Monitoring dan Evaluasi</p>
<p>Untuk setiap aspek pada subbutir 5.4.1 s.d. 5.4.5, menguraikan <br>(1) keberadaan standard operating procedure (SOP), <br>(2) keberadaan dan keefektifan lembaga/komisi pelaksana, dan <br>(3) mekanisme monev</p>
<p>5.4.1 Pelaksanaan ujian kualifikasi.</p>
<?php
if(empty($data['pelaksanaan_ujian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['pelaksanaan_ujian']?>
</div>
<?php } ?>

<p>5.4.2 Proses  penyusunan usul penelitian dan pelaksanaan penelitian disertasi.</p>
<?php
if(empty($data['usul_penelitian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['usul_penelitian']?>
</div>
<?php } ?>
<p>5.4.3 Proses penulisan disertasi.</p>
<?php
if(empty($data['penulisan_disertasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['penulisan_disertasi']?>
</div>
<?php } ?>
<p>5.4.4 Kelayakan dosen dalam proses pembimbingan.</p>
<?php
if(empty($data['kelayakan_dosen'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['kelayakan_dosen']?>
</div>
<?php } ?>
<p>5.4.5 Ujian akhir studi doktor.</p>
<?php
if(empty($data['ujian_akhir'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['ujian_akhir']?>
</div>
<?php } ?>
