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
	2.4 Penjaminan Mutu
</p>
<p style="padding-left:25px">Jelaskan kebijakan, sistem, dan pelaksanaan penjaminan mutu pada program studi, termasuk penjaminan mutu dari badan akreditasi selain BAN-PT.</p>	

<?
if(empty($data)) {
?>

	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
<?
}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$data['penjamin_mutu']?>
	</div>
	<br>
<?php } ?>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFPenjamin_mutu/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>