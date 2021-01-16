<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
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
	.judul2{
		text-align: left;
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