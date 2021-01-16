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
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 25px;
	}
</style>

<p>
	4.5.2 Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Jenjang Pendidikan Lanjut</th>
			<th>Bidang Studi</th>
			<th>Perguruan Tinggi</th>
			<th>Negara</th>
			<th>Tahun Mulai Studi</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(7)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;
		foreach ($data as $key => $value) {
		$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td style="text-align:center"><?=$value['pendidikan_lanjut']?></td>
			<td><?=$value['bidang_studi']?></td>
			<td style="text-align:center"><?=$value['PT']?></td>
			<td style="text-align:center"><?=$value['negara']?></td>
			<td style="text-align:center"><?=$value['th_mulai_studi']?></td>		
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
