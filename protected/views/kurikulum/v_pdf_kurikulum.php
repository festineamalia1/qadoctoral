<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 8px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
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
<p class="judul">
	STANDAR 5. KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK
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
	
	
<P>5.1 Kurikulum</p>
<p style="padding-left:25px;margin-top:-10px">
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
<div>
	5.1.1.2 Uraikan secara ringkas kompetensi pendukung lulusan
</div>
<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_pendukung']?></div>
<br>
<p>5.1.1.3 Uraikan secara ringkas kompetensi lainnya/ pilihan lulusan</p>
<div style="border:1px solid black;padding:5px;"><?=$data['kompetensi_lain']?></div>
<p>Catatan: Pengertian tentang kompetensi utama, pendukung, dan lainnya dapat dilihat pada
Kepmendiknas No. 045/2002.</p>

<br>
<p>5.1.2 Struktur Kurikulum</p>
<p>5.1.2.1 Jumlah sks PS (minimum untuk kelulusan): ... sks yang tersusun sebagai berikut :</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Jenis Mata Kuliah</th>
			<th style="text-align:center;">sks</th>
			<th style="text-align:center;">Keterangan</th>
		</tr>
		<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Matakuliah Wajib</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Matakuliah Pilihan</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Jumlah Total</td>
			<td></td>
			<td></td>
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
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(7)</th>
			<th colspan="1">(8)</th>
			<th colspan="1">(9)</th>
			<th colspan="1">(10)</th>
			<th colspan="1">(11)</th>
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
				<td><?=($value['kelengkapan'] == 'deskripsi')?'ya':'tidak'?></td>
				<td><?=($value['kelengkapan'] == 'silabus')?'ya':'tidak'?></td>
				<td><?=($value['kelengkapan'] == 'SAP')?'ya':'tidak'?></td>
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
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
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
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
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
<?
}
?>