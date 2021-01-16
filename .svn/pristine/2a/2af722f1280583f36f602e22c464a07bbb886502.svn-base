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

			<p>5.7 Upaya Peningkatan Suasana Akademik</p>
			<p style="padding-left:25px">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
			<p>5.7.1 Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik)</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['kebijakan']?>
			</div>

			<p>5.7.2 Ketersediaan dan jenis prasarana, sarana dan dana yang meungkinkan terciptanya interaksi akademik antara sivitas akademika.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['sarana_dana']?>
			</div>

			<p>5.7.3 Program dan kegiatan di dalam dan luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas, untuk menciptakan suasana akademik yang kondusif
			(misal seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus dan temu dosen-mahasiswa-alumni).
			</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['kegiatan']?>
			</div>

			<p>5.7.4 Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['interaksi']?>
			</div>

			<p>5.7.5 Pengembangan perilaku kecendikiawanan</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['pengembangan_perilaku']?>
			</div>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;margin-top:50px;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpeningkatan/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		}
	?>
<?
}
?>