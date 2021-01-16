<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 9px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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
<p>
	3.4 Himpunan Alumni
</p>
<p style="padding-left:25px">
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

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/himpunanalumni/CetakPDFHimpunanAlumni/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>