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
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>

<?php
	if($id_prodi==1){
?>
<p>2.4 Sistem Pengelolaan</p>
<p style="padding-left:25px">
	Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal.
	<br><br>
	Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_pengelolaan']?>
</div>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFSispeng/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>

<?
} else {
?>

<p>2.3 Sistem Pengelolaan</p>
<p style="padding-left:25px">
	Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling</i> dalam kegiatan  internal maupun eksternal.
	<br><br>
	Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.

</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_pengelolaan']?>
</div>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFSispeng/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>
<?
}
?>
<?
}
?>