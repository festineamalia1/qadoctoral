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
if($id_prodi == 1){
	?>
	<p>4.2 	Monitoring dan Evaluasi</p>
		<p style="padding-left:25px;">
		Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
		</p>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	<p>4.2 	Monitoring dan Evaluasi</p>
		<p style="padding-left:25px;">
			Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
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
		<b>Tenaga Pendidik (Dosen) dan Tenaga Kependidikan</b><br><br>
	</div>
	<?php } ?>

	<p>Monitoring</p>
	<?php
	if(empty($data['monitoring'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
		<?=$data['monitoring']?><br>
	</div>
	<?php } ?>

	<p>
		Evaluasi
	</p>
	<?php
	if(empty($data['evaluasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
		<?=$data['evaluasi']?><br>
	</div>
	<?php } ?>

		<p>
		Rekam Jejak
	</p>
	<?php
	if(empty($data['rekam_jejak'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
			<?=$data['rekam_jejak']?><br>
	</div>
	<?php } ?>


		<p>
		Keterangan Tambahan
	</p>
	<?php
	if(empty($data['ket_tambahan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
			
			<?=$data['ket_tambahan']?><br>
	</div>
	<?php } ?>
			
		</div>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/CetakPDFMonev/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
	
}
?>