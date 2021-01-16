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
if(empty($data) && (empty($mk_kurikulum)) && (empty($substansi)) && (empty($suasana))){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>

	<?
		if($id_prodi==1) { //borang 3B (fakultas)
	?>

			<P>5.1 Kurikulum</p>
			<p style="padding-left:23px;margin-top:-10px">Jelaskan peran Fakultas/Sekolah Tinggi dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola  .</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$data['F_kurikulum_fakultas']?>
			</p><br>
			<p>
				5.2 Pembelajaran
			</p>
			<p style="padding-left:23px;margin-top:-10px">
				Jelaskan peran Fakultas/Sekolah Tinggi dalam memonitor dan mengevaluasi pembelajaran .
			</p>
			<p style="border:1px solid black;padding:5px;"><?=$suasana['F_pembelajaran']?></p>
			<br>
			<p>
				5.3 Suasana Akademik
			</p>			
			<p style="padding-left:23px;margin-top:-10px">
				Jelaskan peran Fakultas/Sekolah Tinggi dalam mendorong  suasana akademik yang kondusif, 
				terutama dalam: (1)  Kebijakan tentang suasana akademik, (2) penyediaan  prasarana dan sarana, (3) dukungan dana, dan 
				(4) kegiatan akademik di dalam dan di luar kelas .
			</p>

			<p style="border:1px solid black;padding:5px;"><?=$suasana['F_suasana_akademik']?></p>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/Kurikulum/CetakPDFkurikulum/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
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
			<div style="border:1px solid black;padding:5px;">
				<?=$data['kompetensi_utama']?>
			</div><br>
			<p>
				5.1.1.2 Uraikan secara ringkas kompetensi pendukung lulusan
			</p>
			<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_pendukung']?></div>
			<br>
			<p>5.1.1.3 Uraikan secara ringkas kompetensi lainnya/ pilihan lulusan</p>
			<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_lain']?></div>
			<p>Catatan: Pengertian tentang kompetensi utama, pendukung, dan lainnya dapat dilihat pada
			Kepmendiknas No. 045/2002.</p>

			<br>
			<p>5.1.2 Struktur Kurikulum</p>
			<p>5.1.2.1 Jumlah sks PS (minimum untuk kelulusan):<b> <?=$total_sks?></b> sks yang tersusun sebagai berikut :</p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Jenis Mata Kuliah</th>
						<th style="text-align:center;">sks</th>
						<th style="text-align:center;">Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Matakuliah Wajib</td>
						<td style="text-align:center;" ><?=$sks_wajib?></td>
						<td style="text-align:center;" >-</td>
					</tr>
					<tr>
						<td>Matakuliah Pilihan</td>
						<td style="text-align:center;" ><?=$sks_pilihan?></td>
						<td style="text-align:center;" >-</td>
					</tr>
					<tr>
						<td>Jumlah Total</td>
						<td style="text-align:center;" ><?=$total_sks?></td>
						<td style="text-align:center;" >-</td>
					</tr>
				</tbody>
				<tfoot>

				</tfoot>
			</table>

			<p>5.1.2.2 Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</p>
			<table class="table table-bordered min">
				<thead>
					<tr>
						<th rowspan="2">Smt</th>
						<th rowspan="2">Kode MK</th>
						<th rowspan="2">Nama MK*</th>
						<th rowspan="2">Bobok sks</th>
						<th rowspan="1" colspan="2">sks MK dalam kurikulum</th>
						<th rowspan="2">Bobot Tugas***</th>
						<th rowspan="1" colspan="3">Kelengkapan****</th>
						<th rowspan="2">Unit Jur/ Fak Penyelenggara</th>
					</tr>
					<tr>
						<th colspan="1">Inti**</th>
						<th colspan="1">Institusional</th>
						<th colspan="1">Deskripsi</th>
						<th colspan="1">Silabus</th>
						<th colspan="1">SAP</th>
					</tr>
				</thead>
				<tbody>
					<?
					foreach ($mk_kurikulum as $key => $value) {
						?>
						<tr>
							<td><?=$value['semester']?></td>
							<td><?=$value['kode_mk']?></td>
							<td><?=$value['nama_mk']?></td>
							<td><?=$value['bobot_sks']?></td>
							<td><?=($value['jenis_sks'] == 'inti')?'ya':'tidak'?></td>
							<td><?=($value['jenis_sks'] == 'institusional')?'ya':'tidak'?></td>
							<td><?=$value['bobot_tgs']?></td>
							<td><?=($value['kelengkapan_deskripsi'])?></td>
							<td><?=($value['kelengkapan_silabus'])?></td>
							<td><?=($value['kelengkapan_SAP'])?></td>
							<td><?=$value['penyelenggara']?></td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
			<p class="keterangan">
			* Tuliskan mata kuliah pilihan sebagai mata kuliah pilihan I, mata kuliah pilihan II, dst. (nama-nama mata kuliah pilihan yang dilaksanakan dicantumkan
			dalam tabel 5.1.3.)
			</p>
			<p class="keterangan">
			** Menurut rujukan peer group / SK Mendiknas 045/2002 (ps. 3 ayat 2e)
			</p>
			<p class="keterangan">
			*** Beri tanda √ pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) ≥ 20%.
			</p>
			<p class="keterangan">
			****Beri tanda √ pada mata kuliah yang dilengkapi dengan deskripsi, silabus, dan atau SAP. Sediakan dokumen pada saat asesmen lapangan.
			</p>

			<br>
			<p>5.1.3 Tuliskan mata Kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut :</p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Semester</th>
						<th>Kode MK</th>
						<th>Nama MK (Pilihan)</th>
						<th>Bobot sks</th>
						<th>Bobot Tugas*</th>
						<th>Unit/ Jur/ Fak Pengelola</th>
					</tr>
				</thead>
				<tbody>
					<?
					$total_sks = 0;
					foreach ($mk_kurikulum as $key => $value) {
						if($value['jenis_sks'] == 'institusional'){
						$total_sks += $value['bobot_sks'];
						?>
						<tr>
							<td><?=$value['semester']?></td>
							<td><?=$value['kode_mk']?></td>
							<td><?=$value['nama_mk']?></td>
							<td><?=$value['bobot_sks']?></td>
							<td><?=$value['bobot_tgs']?></td>
							<td><?=$value['penyelenggara']?></td>
						</tr>
						<?
						}
					}
					?>
					<tr>
						<td colspan="3">Total sks</td>
						<td><?=$total_sks?></td>
						<td style="background:#333;" colspan="2"></td>
					</tr>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
			<p class="keterangan">* beri tanda √ pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada
			tugas-tugas (praktikum/praktek, PR atau makalah) ≥ 20%.</p>

			<br>
			<p>5.1.4 Substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu</p>
			<table class="table table-bordered kusus">
				<thead>
					<tr>
						<th rowspan="2">No.</th>
						<th rowspan="2">Nama Praktikum</th>
						<th rowspan="1" colspan="2">Isi praktikum/ praktek</th>
						<th rowspan="2">Tempat/ lokasi praktikum/ praktek</th>
					</tr>
					<tr>
						<th colspan="1">Judul/ Modul</th>
						<th colspan="1">Jam Pelaksanaan</th>
					</tr>
				</thead>
				<tbody>
					<?
					$i = 0;
					foreach ($substansi as $key => $value) {
						$i++;
						?>
						<tr>
							<td><?=$i?></td>
							<td><?=$value['nama_mk']?></td>
							<td><?=$value['judul_modul']?></td>
							<td><?=$value['jam_pelaksanaan']?></td>
							<td><?=$value['lokasi_praktek']?></td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/Kurikulum/CetakPDFkurikulum/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>


	<?
	}
	?>

<?
}
?>