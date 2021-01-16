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
<p>
		5.6 Upaya Peningkatan Suasana Akademik
	</p>

	<p style="padding-left:25px">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
	<p>5.6.1 Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</p>
<?
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<?php
		if(empty($data['suasana_akademik'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong.
		</div>
	<?
		} else {
	?>

		<div style="border:1px solid black;padding:5px;">
		<?=$data['suasana_akademik']?>
		</div>
	<?php } ?>
	<p>5.6.2 Ketersediaan dan kelengkapan jenis prasarana (laboratorium, ruang kerja mahasiswa, ruang seminar, perpustakaan, common room, prasarana olah raga dan seni, ibadah dll.), sarana 
		(koleksi jurnal ilmiah dan buku, akses internet, fasilitas komputer,  fasilitas lab., sarana olah raga dan seni dll.) dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.</p>
	<?php
	if(empty($data['ketersediaan_kelengkapan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;">
		<?=$data['ketersediaan_kelengkapan']?>
	</div>
	<?php } ?>

	<p>5.6.3 Interaksi akademik berupa program dan kegiatan di dalam dan di luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas,  untuk menciptakan suasana 
		akademik yang kondusif (misalnya seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus, dan temu dosen-mahasiswa-alumni).</p>
	<?php
	if(empty($data['interaksi_akademik'])){
	?>	
	<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>	
			<div style="border:1px solid black;padding:5px;">
				<?=$data['interaksi_akademik']?>
			</div>
	<?php } ?>

	<p>5.6.4 Upaya PS untuk mengembangkan perilaku kecendekiawanan dalam hal kepedulian terhadap lingkungan dan kemampuan untuk memberikan tanggapan dan solusinya.</p>
		
	<?php
	if(empty($data['upaya_ps'])){
	?>
	<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['upaya_ps']?>
			</div>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;margin-top:50px;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpeningkatan/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		}
	?>
<?
}
?>