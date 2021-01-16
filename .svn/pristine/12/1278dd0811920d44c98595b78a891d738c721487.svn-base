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
<p>
	Sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu
penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).
</p>


<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<!--Sistem  seleksi/perekrutan,  penempatan,  pengembangan,  retensi,  dan  pemberhentian  dosen  dan  tenaga  kependidikan  untuk  menjamin mutu
	penyelenggaraan program akademik terdapat pada Statuta Universitas <br> -->
	<b>A. Tenaga Pendidik (Dosen)</b><br>
	<?=$data['rekrut_seleksi']?><br>
	<?=$data['penempatan']?><br>
	Pengembangan Dosen<br>
	<?=$data['pengembangan']?><br>
	<?=$data['retensi']?><br>
	<?=$data['berhenti_dosen']?><br>
	<b>B. Tenaga Kependidikan</b><br>
	<!--Secara  umum  tenaga  kependidikan  terdiri  dari  dua  tingkat  yaitu  bagian  administrasi/tata  usaha  termasuk  pustakawan,  laboran  dan  teknisi  serta
	bagian pembantu pelaksana meliputi tenaga kebersihan, satpam dan supir.-->
	<?=$data['rekrut_seleksi']?><br>
	<?=$data['penempatan']?><br>
	<?=$data['pengembangan']?><br>
	<?=$data['retensi']?><br>
	<?=$data['berhenti_dosen']?><br>
</div>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/CetakPDFSeleksi_pengembangan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>



<?
}
?>