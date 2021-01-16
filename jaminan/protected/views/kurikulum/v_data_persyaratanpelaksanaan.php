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
<p>5.2 Persyaratan Pelaksanaan</p>
			<p style="padding-left:25px">Berikan penjelasan persyaratan mengikuti Pendidikan Doktor, proses pelaksanaan dan persyaratan kelulusannya, khususnya mengenai hal-hal berikut :</p>
			<p>5.2.1 Persyaratan mukim (residency requirement), pelaksanaan dan kendala yang dihadapi</p>
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
	if(empty($data['p_mukin'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada.
		</div>
	<?
		} else {
	?>
	
			<div style="border:1px solid black;padding:5px;">
				<?=$data['p_mukin']?>
			</div>
			<?php } ?>

			<p>5.2.2 Persyaratan penguasaan bahasa Inggris (TOEFL).</p>
			<?php
	if(empty($data['p_toefl'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['p_toefl']?>
			</div>
<?php } ?>
			<p>5.2.3 Persyaratan perkuliahan dan ujian mata kuliah yang isinya berupa perkembangan ilmu mutakhir dalam bidangnyadan penjelasan tentang pelaksanaan dan kendala yang dihadapi.</p>
			<?php
	if(empty($data['kuliah_ujian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['kuliah_ujian']?>
			</div>
<?php } ?>
			<p>5.2.4 Cara kualifikasi program studi doktor. </p>
			<?php
	if(empty($data['ujian_kualifikasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['ujian_kualifikasi']?>
			</div>
<?php } ?>
			<p>5.2.5 Cara penyajian dan penilaian rencana penelitian disertasi.</p>
			<?php
	if(empty($data['penyaajian_penilaian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['penyaajian_penilaian']?>
			</div>
<?php } ?>
			<p>5.2.6 Peraturan tentang kewajiban penyajian hasil penelitian disertasi dalam seminar (internasional, nasional, atau lokal), serta pelaksanaan dan kendala yang dihadapi.</p>
			<?php
	if(empty($data['peraturan_penyajian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['peraturan_penyajian']?>
			</div>
<?php } ?>
			<p>5.2.7 Peraturan tentang kewajiban publikasi hasil penelitian disertasi dalam jurnal ilmiah (jurnal internasional, jurnal nasional terakreditasi, jurnal lokal), serta pelaksanaan dan kendala yang dihadapi.</p>
			<?php
	if(empty($data['peraturan_publikasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['peraturan_publikasi']?>
			</div>
<?php } ?>
			<p>5.2.8 Peraturan tentang penilaian kelayakan mutu disertasi, pelaksanaan serta kendala yang dihadapi.</p>
			<?php
	if(empty($data['penilaian'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['penilaian']?>
			</div>
<?php } ?>
			<p>5.2.9 Peraturan tentang keanggotaan tim penguji dalam ujian akhir tertutup studi doktor, pelaksanaan serta kendala yang dihadapi</p>
			<?php
	if(empty($data['tim_penguji'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>

			<div style="border:1px solid black;padding:5px;">
				<?=$data['tim_penguji']?>
			</div>
			<?php } 

	}
	?>
			<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/Kurikulum/CetakPDFPersyaratanPelaksanaan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
		<br>


