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
		text-align: left;
		font-size: 16px;
		font-weight: bold;
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
<p class="judul">
	STANDAR 5. KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK
</p>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<P>5.1 Kurikulum</p>
<p style="padding-left:25px;margin-top:-10px">Jelaskan peran Fakultas/Sekolah Tinggi dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola  .</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['F_kurikulum_fakultas']?>
</p><br>
<p>
	5.2 Pembelajaran
</p>
<p style="padding-left:25px;margin-top:-10px">
	Jelaskan peran Fakultas/Sekolah Tinggi dalam memonitor dan mengevaluasi pembelajaran .
</p>
<p style="border:1px solid black;padding:5px;"><?=$data['F_pembelajaran']?></p>
<br>
<p>
	5.3 Suasana Akademik
</p>
<p style="padding-left:25px;margin-top:-10px">
	Jelaskan peran Fakultas/Sekolah Tinggi dalam mendorong  suasana akademik yang kondusif, 
	terutama dalam: (1)  Kebijakan tentang suasana akademik, (2) penyediaan  prasarana dan sarana, (3) dukungan dana, dan 
	(4) kegiatan akademik di dalam dan di luar kelas .
</p>

<p style="border:1px solid black;padding:5px;"><?=$data['F_suasana_akademik']?></p>

<?
}
?>