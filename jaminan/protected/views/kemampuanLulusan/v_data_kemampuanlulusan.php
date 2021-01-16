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
	<p>5.5 Upaya Peningkatan Kemampuan Lulusan</p>
<p style="padding-left:25px">Upaya Peningkatan Kemampuan Lulusan Program Doktor dalam Beradaptasi dengan Perubahan/Perkembangan atau Kemampuan Melakukan Beragam Pekerjaan (Versatility). </p>
<p>Uraikan upaya program studi agar lulusan program doktor memiliki kemampuan dalam beradaptasi dengan perubahan/perkembangan atau kemampuan melakukan beragam pekerjaan (Versatility). </p>


<?php
	if(empty($data)){
	?>
		<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?	
	} else { ?>
		<div style="padding:5px;border:1px solid black;">
		<?
		if(empty($data['upaya_program'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['upaya_program']."</span><br>";
		} ?>
	</div>
	<br>

<?php
 } ?>
		
		<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFPamong/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
		</div>
