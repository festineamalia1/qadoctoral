<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt; solid black;
		border-top: none;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
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
</style>
<p>
	3.2.3 Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut:
</p>
<?
if(empty($data)) {
?>	
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?
} else {
	// variabel
	$ts_jml = $ts1_jml = $ts2_jml = $ts3_jml = $ts4_jml = 0;
	$ts_jml_lulus = $ts1_jml_lulus = $ts2_jml_lulus = $ts3_jml_lulus = $ts4_jml_lulus = 0;
	// ts
	if(!empty($data['ts'])){
		foreach ($data['ts'] as $key => $value) {
			$ts_jml += $value['value_jumlah']; 
			$ts_jml_lulus += $value['jum_lulusan'];
		}
	}
	// ts1
	if(!empty($data['ts1'])){
		foreach ($data['ts1'] as $key => $value) {
			$ts1_jml += $value['value_jumlah'];
			$ts1_jml_lulus += $value['jum_lulusan'];
		}
	}
	// ts2
	if(!empty($data['ts2'])){
		foreach ($data['ts2'] as $key => $value) {
			$ts2_jml += $value['value_jumlah'];
			$ts2_jml_lulus += $value['jum_lulusan'];
		}
	}
	// ts3
	if(!empty($data['ts3'])){
		foreach ($data['ts3'] as $key => $value) {
			$ts3_jml += $value['value_jumlah'];
			$ts3_jml_lulus += $value['jum_lulusan'];
		}
	}
	// ts4
	if(!empty($data['ts4'])){
		foreach ($data['ts4'] as $key => $value) {
			$ts4_jml += $value['value_jumlah'];
			$ts4_jml_lulus += $value['jum_lulusan'];
		}
	}
	?>		
		
		<table class="table table-bordered min">
			<thead>
				<tr>
					<th rowspan="2" style="width:100px;">Tahun Masuk</th>
					<th rowspan="1" colspan="5">Jumlah Mahasiswa Bukan Transfer per Angkatan pada Tahun</th>
					<th rowspan="1" style="width:150px;">Jumlah Lulusan s.d. TS (dari Mahasiswa Bukan Transfer)</th>
				</tr>
				<tr>
					<th style="width:100px;" colspan="1">TS-4</th>
					<th colspan="1" style="width:140px;">TS-3</th>
					<th colspan="1" style="width:140px;">TS-2</th>
					<th colspan="1" style="width:140px;">TS-1</th>
					<th colspan="1" style="width:140px;">TS</th> 
					<th></th>
				</tr>
				<tr>
					<th style="align:center">(1)</th>
					<th style="align:center">(2)</th>
					<th style="align:center">(3)</th>
					<th style="align:center">(4)</th>
					<th style="align:center">(5)</th>
					<th style="align:center">(6)</th>
					<th style="align:center">(7)</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td style="text-align:center;">TS-4</td>
				<td><i>(a)</i>= <?=$ts4_jml?></td>
				<td><?=$ts4_jml?></td>
				<td><?=$ts4_jml?></td>
				<td><?=$ts4_jml?></td>
				<td><i>(b)</i>= <?=$ts4_jml - $ts4_jml_lulus?></td>
				<td><i>(c)</i>= <?=$ts4_jml_lulus?></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-3</td>
				<td  style="background:grey"></td>
				<td><?=$ts3_jml?></td>
				<td><?=$ts3_jml?></td>
				<td><?=$ts3_jml?></td>
				<td><?=$ts3_jml - $ts3_jml_lulus?></td>
				<td><?=$ts3_jml_lulus?></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-2</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td><?=$ts2_jml?></td>
				<td><?=$ts2_jml?></td>
				<td><?=$ts2_jml?></td>
				<td><?=$ts2_jml?></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-1</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td><i>(d)</i>= <?=$ts1_jml?></td>
				<td><i>(e)</i>= <?=$ts1_jml?></td>
				<td><i>(f)</i>= <?=$ts1_jml?></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td style="background:grey"></td>
				<td style="background:grey"></td>
				<td><?=$ts_jml?></td>
				<td style="background:grey"></td>
			</tr>
			</tbody>
		<tfoot>

		</tfoot>
	</table>
<p class="keterangan">
	* Tidak memasukkan mahasiswa transfer.<br>
	Catatan : huruf-huruf a, b, c, d, e dan f harus tetap tercantum pada tabel di atas.

</p>
<?php } ?>