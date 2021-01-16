div<style type="text/css">
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
<p class="sub_judul">5.7 Upaya Peningkatan Suasana Akademik</p>
<p>Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
<p>5.7.1 Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik)</p>
<div style="border:1px solid black;padding:5px;">
	<?=$data['kebijakan']?>
</div>

<p>5.7.2 Ketersediaan dan jenis prasarana, sarana dan dana yang meungkinkan terciptanya interaksi akademik antara sivitas akademika.</p>
<div style="border:1px solid black;padding:5px;">
	<?=$data['sarana_dana']?>
</div>

<p>5.7.3 Program dan kegiatan di dalam dan luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas, untuk menciptakan suasana akademik yang kondusif
(misal seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus dan temu dosen-mahasiswa-alumni).
</p>
<div style="border:1px solid black;padding:5px;">
	<?=$data['kegiatan']?>
</div>

<p>5.7.4 Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</p>
<div style="border:1px solid black;padding:5px;">
	<?=$data['interaksi']?>
</div>

<p>5.7.5 Pengembangan perilaku kecendikiawanan</p>
<div style="border:1px solid black;padding:5px;">
	<?=$data['pengembangan_perilaku']?>
</div>

<?
}
?>