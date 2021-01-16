<?php
$this->breadcrumbs=array(
	'Sampul',
);
?>

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

<?php
if(isset(Yii::app()->user->group_id)){
	if(Yii::app()->user->group_id != 1){
		?>
		<div style="width:25%;margin:auto;">
			<img src="<?=Yii::app()->getBaseUrl(true)?>/images/logo-banpt.jpg" style="margin:auto;width:100%;">
		</div>

		<p class="judul">
			AKREDITASI PROGRAM STUDI SARJANA 
		</p>
		<p class="judul" style="margin-top:40%;">
			BUKU III A
		</p>
		<p class="judul">
			BORANG AKREDITASI
		</p>
		<p class="judul">
			YANG DIISI OLEH PROGRAM STUDI
		</p>
		<p class="judul">
		</p>
		<p class="judul" style="margin-top:45%;">
			DEPATEMEN PENDIDIKAN NASIONAL
		</p>
		<p class="judul" style="font-weight:bold;">
			BADAN AKREDITASI NASIONAL PERGURUAN TINGGI
		</p>
		<p class="judul">
			JAKARTA 2008
		</p>
		<?php
	}else{
		?>

		<div style="width:25%;margin:auto;">
			<img src="<?=Yii::app()->getBaseUrl(true)?>/images/logo-banpt.jpg" style="margin:auto;width:100%;">
		</div>

		<p class="judul">
			AKREDITASI PROGRAM STUDI SARJANA 
		</p>
		<p class="judul" style="margin-top:40%;">
			BUKU III B
		</p>
		<p class="judul">
			BORANG AKREDITASI
		</p>
		<p class="judul">
			YANG DIISI OLEH FAKULTAS
		</p>
		<p class="judul" style="margin-top:45%;">
			DEPATEMEN PENDIDIKAN NASIONAL
		</p>
		<p class="judul" style="font-weight:bold;">
			BADAN AKREDITASI NASIONAL PERGURUAN TINGGI
		</p>
		<p class="judul">
			JAKARTA 2008
		</p>

		<?php
	}
?>

<!-- tombol cetak -->
<div class="row-fluid" style="margin-top:80px;margin-bottom:20px;">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/sampul/cetakpdf" target="_blank" class="btn btn-primary">
			<i class="icon-print icon-white"></i> 
			Cetak Sampul
		</a>
	</div>
</div>

<?php
}else{
	?>
		
	<?php
}
?>