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
<p>
		1.1 Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian
	</p>

	<p>
		1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak - pihak yang dilibatkan 
	</p>
<?
if(empty($data)) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
<?
} else {
?>
	<?php
	if(empty($data['mekanisme'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['mekanisme']?>
	</div>
	<?php } ?>
	<p>
		Visi Program studi
	</p>
	<?php
	if(empty($data['visi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['visi']?>
	</div>
	<?php } ?>
	<p>
		Misi Program studi
	</p>
	<?php
	if(empty($data['misi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['misi']?>
	</div>
	<?php } ?>
	<p>
		Tujuan Program studi
	</p>
	<?php
	if(empty($data['tujuan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['tujuan']?>
	</div>
	<?php } ?>
	<p>
		Sasaran dan Strategi Pencapaiannya
	</p>
	<?php
	if(empty($data['sasaran'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		Sasaran : <?=$data['sasaran']?>
		<br>
		Strategi : <?=$data['strategi']?>
	</div>
	<?php } ?>
	<p>
		1.2 Sosialisasi
	</p>
	<p>
		Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa)
		dan tenaga kependidikan.
	</p>
	<?php
	if(empty($data['sosialisasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['sosialisasi']?>
	</div>
	<?php } 

	}
	?>
	<div class="row-fluid" style="margin-top:10px;">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/visiMisi/CetakPDF/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>