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
<p>5.2 Persyartan dan Pelaksanaan</p>
<p>Berikan penjelasan persyaratan mengikuti pendidikan doktor, proses pelaksanaan dan persyaratan kelulusannya, khususnya mengenai hal-hal berikut :</p>
<p>5.2.1 Persyaratan mukim (residency requirement), pelaksanaan dan kendala yang dihadapi</p>
<?php
if(empty($data['p_mukin'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
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

<p>5.2.6 Peraturan tentang kewajiban penyajian hasil penelitian tesis dalam seminar (internasional, nasional, wilayah, lokal PT) serta pelaksanaan dan kendala yang dihadapi.Peraturan tentang kewajiban penyajian hasil penelitian disertasi dalam seminar (internasional, nasional, atau lokal), serta pelaksanaan dan kendala yang dihadapi.</p>
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


<p>5.2.7 peraturan tentang keanggotaan tim penguji dalam ujian akhir studi magister, pelaksanaan serta kendala yang dihadapi.</p>
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
<?php } ?>


