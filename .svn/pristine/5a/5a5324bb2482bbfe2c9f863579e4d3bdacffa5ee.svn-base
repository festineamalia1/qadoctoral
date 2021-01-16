<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt; solid black;
		border-top: none;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>


<p>
	3.4 Himpunan Alumni
</p>
<p style="padding-left:25px">
	Jelaskan apakah lulusan program studi memiliki himpunan alumni.  
	Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni 
	untuk kemajuan program studi dalam kegiatan akademik dan non akademik, 
	meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas
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
<p style="padding:5px;border:0.01pt solid black;">
	<b>1.Aktifitas : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['aktivitas']."</span><br>";
	?>
	<br>
	<b>2.Jenis Kegiatan :</b><br>
	<?php
		if($data['jenis_kegiatan'] == 'non'){
			echo "<span style='margin-left:15px;'>Non Akademik</span><br>";
		}else{
			echo "<span style='margin-left:15px;'>Akademik</span><br>";
		}
	?><br>
	<b>3.Hasil Kegiatan : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['hasil_kegiatan']."</span><br>";
	?><br>
	<b>4.Sumbangan Dana : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['sumbangan_dana']."</span><br>";
	?><br>
	<b>5.Sumbangan Fasilitas : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['sumbangan_fasilitas']."</span><br>";
	?>
</p>
<?
}
?>