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
		padding: 5px;
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

<?php
if((empty($pustaka)) && (empty($jurnal)) && (empty($sumber)) && (empty($peralatan)) ){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p class="sub_judul">6.4 Sarana Pelaksanaan Kegiatan Akademik</p>
<p>
	6.4.1 Pustaka (buku teks, karya ilmiah dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)<br>
	Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel berikut :
</p>
<br>
<p>
	Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th>Jenis Pustaka</th>
			<th>Jumlah Judul</th>
			<th>Jumlah Copy</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
		</tr>
	</thead>
	<tbody>
		<?
		foreach ($pustaka as $key => $value) {
			?>
			<tr>
				<td><?=$value['jenis_pustaka']?></td>
				<td style="text-align:center;"><?=$value['jml_judul']?></td>
				<td style="text-align:center;"><?=$value['jml_copy']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p>
	Isikan jurnal/ prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir dengan mengikuti format tabel berikut :
</p>
<p>
	Tabel 2. Jurnal yang tersedia /yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th>Jenis</th>
			<th>Nama Jurnal</th>
			<th>Rincian Tahun dan Nomor</th>
			<th>Jumlah</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i = 0;
		$rowspan = sizeof($jurnal['dikti']);
		foreach ($jurnal['dikti'] as $key => $value) {
			$i++;
			echo "<tr>";
			if($i == 1){
				?>
				<td rowspan="<?=$rowspan?>">Jurnal Terakreditasi DIKTI*</td>
				<?
			}
			?>
				<td><?=$value['nama_jurnal']?></td>
				<td style="text-align:center;"><?=$value['th_no_terbit']?></td>
				<td style="text-align:center;"><?=$value['jumlah']?></td>
			</tr>
			<?
		}
		?>
		<?
		$i = 0;
		$rowspan = sizeof($jurnal['internasional']);
		foreach ($jurnal['internasional'] as $key => $value) {
			$i++;
			echo "<tr>";
			if($i == 1){
				?>
				<td rowspan="<?=$rowspan?>">Jurnal Internasional*</td>
				<?
			}
			?>
				<td><?=$value['nama_jurnal']?></td>
				<td style="text-align:center;"><?=$value['th_no_terbit']?></td>
				<td style="text-align:center;"><?=$value['jumlah']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Catatan * = termasuk e-journal
</p>
<p>
	6.4.2 Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta alamat website) yang
	biasa dimanfaatkan oleh dosen dan mahasiswa program studi ini.
</p>
<p style="border:1px solid black;padding:5px;">
	<?
	$i = 0;
	foreach ($sumber as $key => $value) {
		$i++;
		?>
		<?=$i?>. <?=$value['judul_pustaka']?>, penerbit : <?=$value['penerbit_sumber']?>, website : <?=$value['website_sumber']?><br>
		<?
	}
	?>
</p>
<br>
<p>
	6.4.3 Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/ balai kesehatan,
	<i>green house</i>, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan / fakultas dengan mengikuti format tabel berikut :
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Laboratorium</th>
			<th rowspan="2">Jenis Peralatan Utama</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="1" colspan="2">Kepemilikan</th>
			<th rowspan="1" colspan="2">Kondisi</th>
			<th rowspan="2">Rata-rata waktu penggunaan (jam/minggu)</th>
		</tr>
		<tr>
			<th colspan="1">SD</th>
			<th colspan="1">SW</th>
			<th colspan="1">Terawat</th>
			<th colspan="1">Tidak Terawat</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(8)</th>
			<th colspan="1">(9)</th>
		</tr>
	</thead>
	<tbody>		
		<?
		$i = 0;
		foreach ($peralatan as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td><?=$value['nama_lab']?></td>
				<td><?=$value['jenis_peralatan']?></td>
				<td style="text-align:center;"><?=$value['jml_unit']?></td>
				<td style="text-align:center;"><?=(($value['kepemilikan'])=='sendiri' ? 'ya' : 'tidak')?></td>
				<td style="text-align:center;"><?=(($value['kepemilikan'])=='sewa' ? 'ya' : 'tidak')?></td>
				<td style="text-align:center;"><?=(($value['kondisi'])=='terawat' ? 'ya' : 'tidak')?></td>
				<td style="text-align:center;"><?=(($value['kondisi'])=='tidak' ? 'ya' : 'tidak')?></td>
				<td style="text-align:center;"><?=$value['rata2_wkt_guna']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Keterangan :<br>
	SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama/Hak Pakai.
</p>
<?
}
?>