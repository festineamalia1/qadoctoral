<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 7px;
	}
	table tr td{
		border: 0.01pt solid black;
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

<p>5.6 Upaya Perbaikan Pembelajaran</p>
<p>Uraikan upaya perbaikan pembelajaran serta hasil yang telah dilakukan dan dicapai dalam tiga tahun terakhir dan hasilnya.</p>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered kusus">
	<thead>
		<tr>
			<th rowspan="2" style="width:200px;">Butir</th>
			<th rowspan="1" colspan="2">Upaya Perbaikan</th>
		</tr>
		<tr>
			<th colspan="1">Tindakan</th>
			<th colspan="1">Hasil</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Materi</td>
			<td><?=$data['materi_tindakan']?></td>
			<td><?=$data['materi_hasil']?></td>
		</tr>
		<tr>
			<td>Metode Pembelajaran</td>
			<td><?=$data['metode_tindakan']?></td>
			<td><?=$data['metode_hasil']?></td>
		</tr>
		<tr>
			<td>Penggunaan Teknologi Pembelajaran</td>
			<td><?=$data['teknologi_tindakan']?></td>
			<td><?=$data['teknologi_hasil']?></td>
		</tr>
		<tr>
			<td>Cara-cara evaluasi</td>
			<td><?=$data['evaluasi_tindakan']?></td>
			<td><?=$data['evaluasi_hasil']?></td>
		</tr>
		<tr>
			<td>...</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?
}
?>