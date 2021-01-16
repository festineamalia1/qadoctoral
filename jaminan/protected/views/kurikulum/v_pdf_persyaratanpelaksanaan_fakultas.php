<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
	}
	table tr td{
		border: thin solid black;
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

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p class="sub_judul">5.2 Persyaratan Pelaksanaan</p>
<p>Berikan penjelasan persyaratan engikuti Pendidikan Doktor, proses pelaksanaan dan persyaratan kelulusannya, khususnya mengenai hal-hal berikut :</p>
<p>5.2.1 Persyaratan mukim (residency requirement), pelaksanaan dan kendala yang dihadapi</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['p_mukin']?>
</p>

<p>5.2.2 Persyaratan penguasaan bahasa Inggris (TOEFL).</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['p_toefl']?>
</p>

<p>5.2.3 Persyaratan perkuliahan dan ujian mata kuliah yang isinya berupa perkembangan ilmu mutakhir dalam bidangnyadan penjelasan tentang pelaksanaan dan kendala yang dihadapi.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['kuliah_ujian']?>
</p>

<p>5.2.4 Cara kualifikasi program studi doktor. </p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['ujian_kualifikasi']?>
</p>

<p>5.2.5 Cara penyajian dan penilaian rencana penelitian disertasi.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['penyaajian_penilaian']?>
</p>

<p>5.2.6 Peraturan tentang kewajiban penyajian hasil penelitian disertasi dalam seminar (internasional, nasional, atau lokal), serta pelaksanaan dan kendala yang dihadapi.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['peraturan_penyajian']?>
</p>

<p>5.2.7 Peraturan tentang kewajiban publikasi hasil penelitian disertasi dalam jurnal ilmiah (jurnal internasional, jurnal nasional terakreditasi, jurnal lokal), serta pelaksanaan dan kendala yang dihadapi.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['peraturan_publikasi']?>
</p>

<p>5.2.8 Peraturan tentang penilaian kelayakan mutu disertasi, pelaksanaan serta kendala yang dihadapi.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['penilaian']?>
</p>

<p>5.2.9 Peraturan tentang keanggotaan tim penguji dalam ujian akhir tertutup studi doktor, pelaksanaan serta kendala yang dihadapi</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['tim_penguji']?>
</p>


<?
}
?>