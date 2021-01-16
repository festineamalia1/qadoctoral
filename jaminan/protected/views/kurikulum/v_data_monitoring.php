<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
	}
</style>
<p>5.4 Sistem Monitoring dan Evaluasi</p>
<p style="padding-left:25px">Untuk setiap aspek pada subbutir 5.4.1 s.d. 5.5.5, menguraikan <br>(1) keberadaan standard operating procedure (SOP), <br>(2) keberadaan dan keefektifan lembaga/komisi pelaksana, dan <br>(3) mekanisme monev</p>
<p>5.4.1 Pelaksanaan ujian kualifikasi.</p>

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<?php
		{if(empty($data['pelaksanaan_ujian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong.
		</div>
	<?
		} else {
	?>
	
			<div style="border:1px solid black;padding:5px;">
				<?=$data['pelaksanaan_ujian']?>
			</div>
			<?php } ?>

			<p>5.4.2  Proses  penyusunan usul penelitian dan pelaksanaan penelitian disertasi.</p>
			
			<div style="border:1px solid black;padding:5px;">
				<?=$data['usul_penelitian']?>
			</div>

			<p>5.4.3 Proses penulisan disertasi.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['penulisan_disertasi']?>
			</div>

			<p>5.4.4 Kelayakan dosen dalam proses pembimbingan.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['kelayakan_dosen']?>
			</div>

			<p>5.4.5 Ujian akhir studi doktor.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['ujian_akhir']?>
			</div>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;margin-top:50px;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFmonitoring/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

<?
		}
	?>
<?
}
?>

