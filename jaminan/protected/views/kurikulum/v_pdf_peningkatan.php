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


<p>5.6 Upaya Peningkatan Suasana Akademik</p>
<p>Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
<p>5.6.1 Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</p>
<?php
if(empty($data['suasana_akademik'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
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

<?
}
?>