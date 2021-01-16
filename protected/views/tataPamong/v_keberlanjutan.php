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
	
	<?
		if($id_prodi==1) {
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada. 
		</div>
	<?
		} else {
	?>

		<p>2.6 Keberlanjutan</p>
		<p style="padding-left:25px">
				Jelaskan  upaya  untuk  menjamin  keberlanjutan  (sustainability) Program  Studi ini,  khususnya
				dalam hal:
		</p>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
			a. Upaya untuk peningkatan animo calon mahasiswa:<br>
				<span style="margin-left:15px;"><?=$data['animo_calon_mhs']?></span><br>		
			b. Upaya peningkatan mutu manajemen:<br>	 
				<span style="margin-left:15px;"><?=$data['mutu_manajemen']?></span><br>	
			c. Upaya untuk peningkatan mutu lulusan:<br>
				<span style="margin-left:15px;"><?=$data['mutu_lulusan']?></span><br>
			d. Kerjasama dengan instansi pemerintah dan pihak swasta/perusahaan dalam bentuk:<br>
				<span style="margin-left:15px;"><?=$data['kerjasama_kemitraan']?></span><br>
			e. Upaya dan prestasi memperoleh dana hibah kompetitif</span><br>
				<span style="margin-left:15px;"><?=$data['hibah_kompetitif']?>
		</div>

		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFKeberlanjutan/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>

	<?
	}
	?>
<?
}
?>