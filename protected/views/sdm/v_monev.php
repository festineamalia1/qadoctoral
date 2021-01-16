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
	<p style="padding-left:25px;">
		Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
		Sistem monitoring dan evaluasi serta rekam jejak kinerja dosen dan tenaga kependidikan diatur dalam buku pedoman akademik dan modul
		akademik
	</p>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<b>A. Tenaga Dosen</b><br>
		1. Monitoring<br>
		<?=$data['monitoring']?><br>
		2. Evaluasi<br>
		<?=$data['evaluasi']?><br>
		<?=$data['rekam_jejak']?><br>
		<?=$data['ket_tambahan']?><br>
		<b>B. Tenaga Kependidikan</b><br>
		1. Monitoring<br>
		<?=$data['monitoring']?><br>
		2. Evaluasi<br>
		<?=$data['evaluasi']?><br>
		<?=$data['rekam_jejak']?><br>
		<?=$data['ket_tambahan']?><br>
	</div>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/CetakPDFMonev/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
<?
}
?>