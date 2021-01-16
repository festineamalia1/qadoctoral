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
if($id_prodi==1) { //borang 3B (fakultas)
?>

		<P>5.1 Kurikulum</p>
		<p style="padding-left:23px;margin-top:-10px">Jelaskan peran Fakultas/Sekolah Tinggi dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola  .</p>
		<?php
		if(empty($data['F_kurikulum_fakultas'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?=$data['F_kurikulum_fakultas']?>
		</div><br>
		<?php } ?>
		<p>
			5.2 Pembelajaran
		</p>
		<p style="padding-left:23px;margin-top:-10px">
			Jelaskan peran Fakultas/Sekolah Tinggi dalam memonitor dan mengevaluasi pembelajaran .
		</p>
		<?php
		if(empty($data['F_pembelajaran'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;"><?=$suasana['F_pembelajaran']?></div>
		<br>
		<?php } ?>
		<p>
			5.3 Suasana Akademik
		</p>			
		<p style="padding-left:23px;margin-top:-10px">
			Jelaskan peran Fakultas/Sekolah Tinggi dalam mendorong  suasana akademik yang kondusif, 
			terutama dalam: (1)  Kebijakan tentang suasana akademik, (2) penyediaan  prasarana dan sarana, (3) dukungan dana, dan 
			(4) kegiatan akademik di dalam dan di luar kelas .
		</p>
		<?php
		if(empty($data['F_suasana_akademik'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;"><?=$suasana['F_suasana_akademik']?></div>
		<?php } ?>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/Kurikulum/CetakPDFkurikulum/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>

<?
} else { //borang 3A (program studi)
?>
		<p>5.1 Kurikulum</p>
		<p style="padding-left:25px">
		Kurikulum pendidikan tinggi adalah seperangkat rencana dan pengaturan mengenai isi, bahan
		kajian, maupun bahan pelajaran serta cara penyampaiannya, dan penilaian yang digunakan
		sebagai pedoman penyelenggaraan kegiatan pembelajaran di perguruan tinggi.
		Kurikulum seharusnya memuat standar kompetensi lulusan yang terstruktur dalam kompetensi
		utama, pendukung dan lainnya yang mendukung tercapainya tujuan, terlaksananya misi, dan
		terwujudnya visi program studi. Kurikulum memuat mata kuliah/modul/blok yang mendukung
		pencapaian kompetensi lulusan dan memberikan keleluasaan pada mahasiswa untuk memperluas
		wawasan dan memperdalam keahlian sesuai dengan minatnya, serta dilengkapi dengan deskripsi
		mata kuliah/modul/blok, silabus, rencana pembelajaran dan evaluasi.
		Kurikulum harus dirancang berdasarkan relevansinya dengan tujuan, cakupan dan kedalaman
		materi, pengorganisasian yang mendorong terbentuknya hard skills dan keterampilan kepribadian
		dan perilaku (soft skills) yang dapat diterapkan dalam berbagai situasi dan kondisi.
		</p>
		<br>
		<p>5.1.1 Kompetensi</p>
		<p>5.1.1.1 Uraikan secara ringkas kompetensi utama lulusan</p>
		<?php
		if(empty($data['kompetensi_utama'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?=$data['kompetensi_utama']?>
		</div>
		<?php } ?>
		<br>
		<p>
			5.1.1.2 Uraikan secara ringkas kompetensi pendukung lulusan
		</p>
		<?php
		if(empty($data['kompetensi_pendukung'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_pendukung']?></div>
		<?php } ?>
		<br>
		<p>5.1.1.3 Uraikan secara ringkas kompetensi lainnya/ pilihan lulusan</p>
		<?php
		if(empty($data['kompetensi_lain'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_lain']?></div>
		<p>Catatan: Pengertian tentang kompetensi utama, pendukung, dan lainnya dapat dilihat pada
		Kepmendiknas No. 045/2002.</p>
		<?php } ?>
		<br>
		


<?
}
?>