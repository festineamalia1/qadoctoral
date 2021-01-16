
<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
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
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
</style>


<p class="judul" style="font-weight:bold;">
	STANDAR 4. SUMBER DAYA MANUSIA
</p>

<p>4.1 Sistem Seleksi dan Pengembangan</p>
<p style="padding-left:25px" align="justify">
Jelaskan sistem rekrutmen (termasuk persyaratan akademik dan pengalaman), penempatan, pembinaan, pengembangan dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik. <br><br>
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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify;">	
	
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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify">	
	
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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify;">	
	
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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify;">	
		
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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify;">	
		


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
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;text-align:justify;">	
		

		
		<?=$data['berhenti_kependidikan']?><br>
	</div>
	<?php } } ?>