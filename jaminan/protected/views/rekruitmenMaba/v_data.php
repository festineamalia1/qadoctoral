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
if(empty($data)) {
?>

	<p>
		3.1 Sistem Rekruitmen Mahasiswa Baru
	</p>
	<p style="padding-left:25px">
	Sistem rekrutmen mahasiswa baru mencakup: Kebijakan rekrutmen calon mahasiswa baru, kriteria seleksi mahasiswa baru, 
	sistem pengambilan keputusan, dan prosedur penerimaan mahasiswa baru. <br>

	Jelaskan sistem rekrutmen mahasiswa baru yang diterapkan pada program studi ini.

	</p>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/rekruitmenMaba/CetakPDF/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a> 
		</div>
	</div>
<?
} else {
?>
	<p>
		3.1 Sistem Rekruitmen Mahasiswa Baru
	</p>
	<p style="padding-left:25px">
	Sistem rekrutmen mahasiswa baru mencakup: Kebijakan rekrutmen calon mahasiswa baru, kriteria seleksi mahasiswa baru, 
	sistem pengambilan keputusan, dan prosedur penerimaan mahasiswa baru. <br>

	Jelaskan sistem rekrutmen mahasiswa baru yang diterapkan pada program studi ini.

	</p>
	<p style="padding:5px;border:2px solid black;">
		<b>Kebijakan Rekruitmen Mahasiswa Baru : </b><br>
		<?
		if(empty($data['kebijakan_rekruitmen_calon_maba'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['kebijakan_rekruitmen_calon_maba']."</span><br>";
		} ?>

		<b>Kriteria Seleksi Mahasiswa Baru : </b><br>
		<?
		if(empty($data['kriteria_seleksi_maba'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['kriteria_seleksi_maba']."</span><br>";
		} ?>
		<b>Sistem Pengambilan Keputusan : </b><br>
		<?
		if(empty($data['sistem_pengambilan_kptsan'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['sistem_pengambilan_kptsan']."</span><br>";
		} ?>
		<b>Prosedur Penerimaan Mahasiswa Baru : </b><br>
		<?
		if(empty($data['prosedur_penerimaan_maba'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['prosedur_penerimaan_maba']."</span><br>";
		} ?>
	</p>
	<div class="row-fluid" style="margin-top:10px;">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/rekruitmenMaba/CetakPDF/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

<?php
}
?>