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

						<p>
				1.1 Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian Fakultas/Sekolah Tinggi.
			</p>
			<p>
				1.1.1 Visi
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$data['visi']?>
			</p>
			<p>
				1.1.2 Misi
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$data['misi']?>
			</p>
			<p>
				1.1.3 Tujuan
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$data['tujuan']?>
			</p>
			<p>
				1.1.4 Sasaran dan Strategi Pencapaiannya
			</p>
			<p style="border:1px solid black;padding:5px;">
				Sasaran : <?=$data['sasaran']?>
				<br>
				Strategi : <?=$data['strategi']?>
			</p>
			<p>
				1.2 Uraikan upaya penyebaran/sosialisasi, serta tingkat pemahaman sivitas akademika (dosen dan mahasiswa) dan 
				tenaga kependidikan tentang visi, misi dan tujuan Fakultas/Sekolah Tinggi.
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$data['sosialisasi']?>
			</p>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/visiMisi/CetakPDF/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a> 
				</div>
			</div>
	<?
		} else {
	?>
			<p>
				1.1 Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian
			</p>

			<p>
				1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak - pihak yang dilibatkan :
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				<?=$data['mekanisme']?>
			</div>
			<p>
				1.1.2 Visi
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				<?=$data['visi']?>
			</div>
			<p>
				1.1.3 Misi
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				<?=$data['misi']?>
			</div>
			<p>
				1.1.4 Tujuan
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				<?=$data['tujuan']?>
			</div>
			<p>
				1.1.5 Sasaran dan Strategi Pencapaiannya
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				Sasaran : <?=$data['sasaran']?>
				<br>
				Strategi : <?=$data['strategi']?>
			</div>

			<p>
				1.2 Sosialisasi
			</p>
			<p>
				Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa)
				dan tenaga kependidikan.
			</p>
			<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
				<?=$data['sosialisasi']?>
			</div>

			<div class="row-fluid" style="margin-top:10px;">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/visiMisi/CetakPDF/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		}
	?>
<?
}
?>