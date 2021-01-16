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
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
</style>

<p  style="font-weight:bold;">
	4.2 Monitoring dan Evaluasi
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
<P>
Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
Sistem monitoring dan evaluasi serta rekam jejak kinerja dosen dan tenaga kependidikan diatur dalam buku pedoman akademik dan modul
akademik
</P>
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
<?
}
?>