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

<p>6.3 Prasarana</p>
<p>
	6.3.1   Uraikan penilaian Fakultas/Sekolah Tinggi tentang prasarana yang telah dimiliki, khususnya yang digunakan untuk program-program studi. 
	Uraian ini mencakup aspek: 
	kecukupan dan kewajaran serta rencana pengembangan dalam lima tahun mendatang. Uraikan kendala yang dihadapi dalam penambahan prasarana 
</p>
<p style="border:1px solid black;padding:5px;">
	<?
		foreach ($data as $key => $value) {
	?>
	<?=$value['F_uraian_penilaian']?>
	<?
		}
	?>
</p><br>
<p>
	6.3.2 Sebutkan prasarana tambahan untuk semua  program studi yang dikelola dalam tiga tahun terakhir.
	Uraikan pula  rencana investasi untuk prasarana dalam lima tahun mendatang, dengan mengikuti format tabel berikut :
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Prasarana Tambahan</th>
			<th rowspan="2">Investasi Prasarana Selama Tiga Tahun Terkahir (Juta Rp)</th>
			<th rowspan="1" colspan="2">Rencana Investasi Prasarana dalam Lima Tahun Mendatang</th>
		</tr>
		<tr>
			<th colspan="1">Nilai Investasi (Juta Rp)</th>
			<th colspan="1">Sumber Dana</th>
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
		$i=0;
		foreach ($F_prasarana as $key => $value) {
			$i++;
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$value['jenis_prasarana_tambahan']?></td>
				<td><?=$value['investasi_prasarana']?></td>
				<td><?=$value['rencana_investasis']?></td>
				<td><?=$value['sumber_dana']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
