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
	<p>4.1 Sistem Seleksi dan Pengembangan</p>
		<p style="padding-left:25px;">
		Jelaskan sistem rekrutmen (termasuk persyaratan akademik dan pengalaman), penempatan, pembinaan, pengembangan dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik.
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	<p>
		4.1 Sistem Seleksi dan Pengembangan
		<p style="padding-left:25px;">
		Jelaskan sistem rekrutmen (termasuk persyaratan akademik dan pengalaman), penempatan, pembinaan, pengembangan dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik.
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
	
	<p>
	Sistem Rekrutment
	</p>
	<?php
	if(empty($data['rekrut_seleksi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
	
		<?=$data['rekrut_seleksi']?><br>
	</div>
	<?php } ?>

	<p>
		Penempatan
	</p>
	<?php
	if(empty($data['penempatan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
	
		<?=$data['penempatan']?><br>
	</div>
	<?php } ?>


	<p>
		Pengembangan
	</p>
	<?php
	if(empty($data['pengembangan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
	
		<?=$data['pengembangan']?><br>
	</div>
	<?php } ?>

		<!--?=$data['retensi']?><br>-->

	<p>
	Pembinaan
	</p>
	<?php
	if(empty($data['pembinaan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
		
		<?=$data['pembinaan']?><br>
	</div>
	<?php } ?>

	<p>
	Pemberhentian Dosen
	</p>
	<?php
	if(empty($data['berhenti_dosen'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
		
		<?=$data['berhenti_dosen']?><br>
	</div>
	<?php } ?>
	<p>
	Pemberhentian Tenaga Kependidikan
	</p>
	<?php
	if(empty($data['berhenti_kependidikan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">	
		

		<?=$data['berhenti_kependidikan']?><br>
	</div>
	<?php } ?>
		
		<!-- <b>B. Tenaga Kependidikan</b><br>
		Secara  umum  tenaga  kependidikan  terdiri  dari  dua  tingkat  yaitu  bagian  administrasi/tata  usaha  termasuk  pustakawan,  laboran  dan  teknisi  serta
		bagian pembantu pelaksana meliputi tenaga kebersihan, satpam dan supir.
		<?=$data['rekrut_seleksi']?><br>
		<?=$data['penempatan']?><br>
		<?=$data['pengembangan']?><br>
		<!--<!--?=$data['retensi']?><br>-->
		<!--?=$data['pembinaan']?><br>
		<!--?=$data['berhenti_dosen']?><br>-->
	</div>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/CetakPDFSeleksi_pengembangan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
	<?
	}

?>