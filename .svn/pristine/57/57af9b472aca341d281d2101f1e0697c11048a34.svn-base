<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
		padding: 7px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.ket_atas{
		font-size: 12px;
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>
	4.3.4 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan
	mengikuti format tabel berikut:
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen Tetap</th>
			<th>Bidang Keahlian</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Pertemuan yang Dilaksanakan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;

		$tot_jum_rencana_pertemuan=0;
		$tot_jum_pertemuan_terlaksana=0;

		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['bidang_keahlian']?></td>
			<td><?=$value['kode_mk']?></td>
			<td><?=$value['nama_mk']?></td>
			<td style="text-align:center"><?=$value['jum_kelas']?></td>
			<td style="text-align:center"><?=$value['jum_rencana_pertemuan']?></td>
			<td style="text-align:center"><?=$value['jum_pertemuan_terlaksana']?></td>
		</tr>
		<?php
		$tot_jum_rencana_pertemuan +=$value['jum_rencana_pertemuan'];
		$tot_jum_pertemuan_terlaksana +=$value['jum_pertemuan_terlaksana'];

		}
		?>
		
</tbody>
	<tfoot>
		<tr>
			<th rowspan="1" colspan="6" style="align:center">Jumlah</td>
			<td style="text-align:center"><?=$tot_jum_rencana_pertemuan?></td>
			<td style="text-align:center"><?=$tot_jum_pertemuan_terlaksana?></td>
		</tr>
	</tfoot>
</table>

<p>
	4.3.5 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan
	mengikuti format tabel berikut:
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th width="120">Nama Dosen Tetap</th>
			<th>Bidang Keahlian</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Pertemuan yang Dilaksanakan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;

		$tot_jum_rencana_pertemuan=0;
		$tot_jum_pertemuan_terlaksana=0;

		foreach ($data2 as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['bidang_keahlian']?></td>
			<td><?=$value['kode_mk']?></td>
			<td><?=$value['nama_mk']?></td>
			<td style="text-align:center"><?=$value['jum_kelas']?></td>
			<td style="text-align:center"><?=$value['jum_rencana_pertemuan']?></td>
			<td style="text-align:center"><?=$value['jum_pertemuan_terlaksana']?></td>
		</tr>
		<?php

		$tot_jum_rencana_pertemuan +=$value['jum_rencana_pertemuan'];
		$tot_jum_pertemuan_terlaksana +=$value['jum_pertemuan_terlaksana'];

		}
		?>
		
	</tbody>
	<tfoot>
		<tr align="center">
			<th rowspan="1" colspan="6">Jumlah</td>
			<td style="text-align:center"><?=$tot_jum_rencana_pertemuan?></td>
			<td style="text-align:center"><?=$tot_jum_pertemuan_terlaksana?></td>
		</tr>
	</tfoot>
</table>
