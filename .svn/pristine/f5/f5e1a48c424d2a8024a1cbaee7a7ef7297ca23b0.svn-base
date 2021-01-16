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

			<p>5.3 Pelaksanaan Proses Pembelajaran</p>
			<p style="padding-left:25px">
			Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah
			belajar dan hierarkinya.
			Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang,
			mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan
			memanfaatkan aneka sumber.
			Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki
			secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi
			perkuliahan, serta penilaian hasil belajar.
			</p>
			<br>
			<p>5.3.1 Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</p>
			<p style="padding-left:32px;margin-top:-10px">Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$data['penjelasan_penyusunan']?>
			</div>
			<br>
			<p>5.3.2 Lampiran contoh soal ujian dalam 1 tahun terakhir untuk 5 matakuliah keahlian </p>
			<p>Terlampir</p>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;margin-top:50px;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpembelajaran/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		}
	?>
<?
}
?>