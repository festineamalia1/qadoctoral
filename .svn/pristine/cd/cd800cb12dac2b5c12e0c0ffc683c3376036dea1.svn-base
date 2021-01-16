<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p>
	7.1.3 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun
	terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format
	tabel berikut:
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Judul</th>
			<th rowspan="2">Nama-nama Dosen</th>
			<th rowspan="2">Dihasilkan/Dipublikasikan pada</th>
			<th rowspan="2">Tahun Penyajian/Publikasi</th>
			<th rowspan="1" colspan="3">Tingkat*</th>
		</tr>
		<tr>
			<th colspan="1">Lokal</th>
			<th colspan="1">Nasional</th>
			<th colspan="1">Internasional</th>
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
					</tr>
	</thead>
	<tbody>
		<?
			$i=0;
		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>	 
			<td><?=$value['judul']?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['publikasi']?></td>	
			<td style="text-align:center"><?=$value['th_publikasi']?></td>	
			<td><?=$value['tingkat']?></td>	
			<td><?=$value['status_haki']?></td>
			<td><?=$value['status_haki']?></td>		
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>
			<tr>
				<th rowspan="1" colspan="5">Jumlah</th>
				<th rowspan="1" colspan="1">nc=</th>
				<th rowspan="1" colspan="1">nb=</th>
				<th rowspan="1" colspan="1">na=</th>
			</tr>
	</tfoot>
</table>
<p class="keterangan">
	Catatan:*= Tuliskan banyaknya dosen pada sel yang sesuai
</p>