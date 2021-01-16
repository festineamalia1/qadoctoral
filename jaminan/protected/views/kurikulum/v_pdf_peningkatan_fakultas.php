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
<p class="sub_judul">5.6 Upaya Peningkatan Suasana Akademik</p>
<p>Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
<p>Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['suasaana_akademik']?>
</p>

<p>5.6.2 Ketersediaan dan kelengkapan jenis prasarana (laboratorium, ruang kerja mahasiswa, ruang seminar, perpustakaan, common room, prasarana olah raga dan seni, ibadah dll.), sarana 
	(koleksi jurnal ilmiah dan buku, akses internet, fasilitas komputer,  fasilitas lab., sarana olah raga dan seni dll.) dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['ketersediaan_kelengkapan']?>
</p>

<p>5.6.3 Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.Interaksi akademik berupa program dan kegiatan di dalam dan di luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas,  untuk menciptakan suasana 
	akademik yang kondusif (misalnya seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus, dan temu dosen-mahasiswa-alumni).</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['interaksi_akademik']?>
</p>

<p>5.6.4 Upaya PS untuk mengembangkan perilaku kecendekiawanan dalam hal kepedulian terhadap lingkungan dan kemampuan untuk memberikan tanggapan dan solusinya.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['upaya_ps']?>
</p>

<?
}
?>