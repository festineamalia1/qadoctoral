<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  thin solid black;
	}
	table tr th{
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	p{
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
<h5>
	3.4 Himpunan Alumni
</h5>
<p>
	Jelaskan apakah lulusan program studi memiliki himpunan alumni.  
	Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni 
	untuk kemajuan program studi dalam kegiatan akademik dan non akademik, 
	meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas
</p>
<p style="padding:5px;border:1px solid black;">
	1. Aktifitas : <?=$data['aktivitas']?><br>
	2. Jenis Kegiatan : <?=$data['jenis_kegiatan']?><br>
	3. Hasil Kegiatan : <?=$data['hasil_kegiatan']?><br>
	4. Sumbangan Dana : <?=$data['hasil_kegiatan']?><br>
	5. Sumbangan Fasilitas : <?=$data['sumbangan_fasilitas']?><br>
</p>
<?
}
?>