<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 9px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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
	<?
		if($id_prodi==1) {
	?>	
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada. 
		</div>
	<?
		} else {
			// variabel
			$ts_jml = $ts1_jml = $ts2_jml = $ts3_jml = $ts4_jml = $ts5_jml = $ts6_jml = 0;
			$ts_jml_lulus = $ts1_jml_lulus = $ts2_jml_lulus = $ts3_jml_lulus = $ts4_jml_lulus = $ts5_jml_lulus = $ts6_jml_lulus = 0;
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
			// ts5
			if(!empty($data['ts5'])){
				foreach ($data['ts5'] as $key => $value) {
					$ts5_jml += $value['value_jumlah'];
					$ts5_jml_lulus += $value['jum_lulusan'];
				}
			}
			// ts6
			if(!empty($data['ts6'])){
				foreach ($data['ts6'] as $key => $value) {
					$ts6_jml += $value['value_jumlah'];
					$ts6_jml_lulus += $value['jum_lulusan'];
				}
			}
	?>		
				<p>
					3.1.4 Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut:
				</p>
				<table class="table table-bordered min">
					<thead>
						<tr>
							<th rowspan="2">Tahun Masuk</th>
							<th rowspan="1" colspan="7">Jumlah Mahasiswa Reguler per Angkatan pada Tahun*</th>
							<th rowspan="2" style="width:100px;">Jumlah Lulusan s.d. TS (dari Mahasiswa Reguler)</th>
						</tr>
						<tr>
							<th colspan="1">TS-6</th>
							<th colspan="1">TS-5</th>
							<th colspan="1">TS-4</th>
							<th colspan="1">TS-3</th>
							<th colspan="1">TS-2</th>
							<th colspan="1">TS-1</th>
							<th colspan="1">TS</th>
						</tr>
					</thead>
					<tbody>
		<tr>
			<td style="text-align:center;">TS-6</td>
			<td><i>(a)</i>= <?=$ts6_jml?></td>
			<td><?=$ts6_jml?></td>
			<td><?=$ts6_jml?></td>
			<td><?=$ts6_jml?></td>
			<td><?=$ts6_jml?></td>
			<td><?=$ts6_jml?></td>
			<td><i>(b)</i>= <?=$ts6_jml - $ts6_jml_lulus?></td>
			<td><i>(c)</i>= <?=$ts6_jml_lulus?></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS-5</td>
			<td  style="background:grey"></td>
			<td><?=$ts5_jml?></td>
			<td><?=$ts5_jml?></td>
			<td><?=$ts5_jml?></td>
			<td><?=$ts5_jml?></td>
			<td><?=$ts5_jml?></td>
			<td><?=$ts5_jml - $ts5_jml_lulus?></td>
			<td><?=$ts5_jml_lulus?></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS-4</td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td><i>(d)</i>= <?=$ts4_jml?></td>
			<td><?=$ts4_jml?></td>
			<td><?=$ts4_jml?></td>
			<td><?=$ts4_jml?></td>
			<td><?=$ts4_jml - $ts4_jml_lulus?></td>
			<td><?=$ts4_jml_lulus?></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS-3</td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td><?=$ts3_jml?></td>
			<td><?=$ts3_jml?></td>
			<td><?=$ts3_jml?></td>
			<td><i>(e)</i>= <?=$ts3_jml - $ts3_jml_lulus?></td>
			<td><i>(f)</i>= <?=$ts3_jml_lulus?></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS-2</td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td><?=$ts2_jml?></td>
			<td><?=$ts2_jml?></td>
			<td><?=$ts2_jml?></td>
			<td style="background:grey"></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS-1</td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
			<td><?=$ts1_jml?></td>
			<td><?=$ts1_jml?></td>
			<td style="background:grey"></td>
		</tr>
		<tr>
			<td style="text-align:center;">TS</td>
			<td  style="background:grey"></td>
			<td  style="background:grey"></td>
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
				<div class="row-fluid">
					<div class="span12" style="text-align:right;">
						<a href="<?=Yii::app()->getBaseUrl(true)?>/DataMhs7th/CetakPDFMhs7/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
					</div>
				</div>
	<?
		}
	?>

<?
}
?>