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
		padding: 7px;
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
	4.5 Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir<br><br>
	4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak
tetap)
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Tenaga Ahli/Pakar</th>
			<th>Nama dan Judul Kegiatan</th>
			<th>Waktu Pelaksanaan</th>
		</tr>
			<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
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
			<td><?=$value['nama_pakar']?></td>
			<td><?=$value['nama_kegiatan']?>, <?=$value['judul_kegiatan']?></td>
			<td><?=$value['waktu']?></td>	
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>