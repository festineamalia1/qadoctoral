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
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>6.3 Prasarana</p>
<p>
	6.3.1 Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut :
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th>Ruang Kerja Dosen</th>
			<th>Jumlah Ruang</th>
			<th>Jumlah Luas(m persegi)</th>
		</tr>
		<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
		</tr>
	</thead>
	<tbody>
		<?
		if(isset($data['lbh4'])){
			foreach ($data['lbh4'] as $key => $value) {
				?>
				<tr>
					<td>Satu Ruang untuk lebih dari 4 dosen</td>
					<td style="text-align:center;"><?=$value['jml_ruang']?></td>
					<td style="text-align:center;"><?=$value['luasm2']?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td>Satu  Ruang untuk lebih dari 4 dosen</td>
				<td style="text-align:center;">-</td>
				<td style="text-align:center;">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($data['3sd4'])){
			foreach ($data['3sd4'] as $key => $value) {
				?>
				<tr>
					<td>Satu Ruang untuk 3 - 4 dosen</td>
					<td style="text-align:center;"><?=$value['jml_ruang']?></td>
					<td style="text-align:center;"><?=$value['luasm2']?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td>Satu  Ruang untuk 3 - 4 dosen</td>
				<td style="text-align:center;">-</td>
				<td style="text-align:center;">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($data['2'])){
			foreach ($data['2'] as $key => $value) {
				?>
				<tr>
					<td>Satu Ruang untuk 2 dosen</td>
					<td style="text-align:center;"><?=$value['jml_ruang']?></td>
					<td style="text-align:center;"><?=$value['luasm2']?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td>Satu  Ruang untuk 2 dosen</td>
				<td style="text-align:center;">-</td>
				<td style="text-align:center;">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($data['1'])){
			foreach ($data['1'] as $key => $value) {
				?>
				<tr>
					<td>Satu Ruang untuk satu Dosen (Bukan pejabat struktural)</td>
					<td style="text-align:center;"><?=$value['jml_ruang']?></td>
					<td style="text-align:center;"><?=$value['luasm2']?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td>Satu Ruang untuk satu Dosen (Bukan pejabat struktural)</td>
				<td style="text-align:center;">-</td>
				<td style="text-align:center;">-</td>
			</tr>
			<?
		}
		?>
		<tr>
			<td>Total</td>
			<td style="background:#333"></td>
			<td></td>
		</tr>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p>
	6.3.2 Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. <b>kecuali</b> ruang dosen)
	yang dipergunakan PS dalam proses belajar mengajar dengan mengikuti format tabel berikut: 
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th rowspan="2">No.</th>
			<th rowspan="2">Jenis Prasarana</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="2">Total Luas (meter persegi)</th>
			<th rowspan="1" colspan="2">Kepemilikan</th>
			<th rowspan="1" colspan="2">Kondisi</th>
			<th rowspan="2">Utilitas (Jam/minggu)</th>
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
			<th colspan="1">(7)</th>
			<th colspan="1">(8)</th>
			<th colspan="1">(9)</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i = 0;
		foreach ($lain as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td><?=$value['jenis_prasarana']?></td>
				<td><?=$value['jml_unit']?></td>
				<td><?=$value['tot_luas']?></td>
				<td style="text-align:center;"><?=($value['kepemilikan'] == 'sendiri')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kepemilikan'] == 'sewa')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kondisi'] == 'terawat')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kondisi'] == 'tidak')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=$value['utilisasi']?></td>
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
	SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama
</p>

<p>
	6.3.3 Tuliskan data prasarana lain yang menunjang (misalnya tempat olahraga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan
	mengikuti format tabel berikut :
</p>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th rowspan="2">No.</th>
			<th rowspan="2">Jenis Prasarana Penunjang</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="2">Total Luas (meter persegi)</th>
			<th rowspan="1" colspan="2">Kepemilikan</th>
			<th rowspan="1" colspan="2">Kondisi</th>
			<th rowspan="2">Unit Pengelola</th>
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
			<th colspan="1">(7)</th>
			<th colspan="1">(8)</th>
			<th colspan="1">(9)</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i = 0;
		foreach ($lain2 as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td><?=$value['jenis_prasarana']?></td>
				<td><?=$value['jml_unit']?></td>
				<td><?=$value['tot_luas']?></td>
				<td style="text-align:center;"><?=($value['kepemilikan'] == 'sendiri')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kepemilikan'] == 'sewa')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kondisi'] == 'terawat')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=($value['kondisi'] == 'tidak')? 'ya':'tidak'?></td>
				<td style="text-align:center;"><?=$value['unit_pengelola']?></td>
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
	SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama
</p>
<?
}
?>