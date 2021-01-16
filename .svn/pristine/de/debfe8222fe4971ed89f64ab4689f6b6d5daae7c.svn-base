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
<?
if($id_prodi==1) { //borang 3B (fakultas)
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?php 
} else { ?>
	<p>6.1 Pengelolaan Dana</p>
	<p style="padding-left:25px">
		Keterlibatan aktif program studi harus tercermin dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme
		yang transparant dan akuntabel.
	</p>
	<br>
	<p style="padding-left:25px">
		Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.
	</p>
	<?php
	if(empty($data['penjelasan_pengelolaan'])){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<div style="border:1px solid black;padding:10px;">
		<?=$data['penjelasan_pengelolaan']?>
	</div>
	<br>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFpengelolaan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

	<?
	}
	?>
<? } ?>
