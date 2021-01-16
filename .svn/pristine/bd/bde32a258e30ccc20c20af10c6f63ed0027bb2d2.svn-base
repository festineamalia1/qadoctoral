<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  thin solid black;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
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
		margin-bottom: 50px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>
	3.1.3   Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). 
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Kegiatan dan Waktu Penyelenggaraan</th>
			<th>Tingkat (Lokal, Wilayah, Nasional, atau Internasional)</th>
			<th>Prestasi yang Dicapai</th>
		</tr>

		<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 0;
		foreach ($dt as $key => $value) {
		$i++;
		?>
		<tr>
			<td style="text-align:center;"><?=$i?></td>
			<td><?=$value['nama_kegiatan']?>, <?=$value['wkt_penyelenggaraan']?></td>
			<td><?=$value['tingkat']?></td>
			<td><?=$value['prestasi_dicapai']?></td>
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
