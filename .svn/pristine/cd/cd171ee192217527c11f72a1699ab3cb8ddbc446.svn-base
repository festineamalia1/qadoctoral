
<!-- DAFTAR ISI -->
<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 12px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	@media print{
		.table td{
			padding: 10px;
		}
	}
</style>
<?php
	$halaman = explode(";", $daftar_isi['daftar_isi']);
	$start_hal = 1;
	$count_hal = $start_hal;
	foreach ($halaman as $key => $value) {
		$a = explode(":", $value);
		$count_hal += $a[1];
		$hal[$a[0]] = $count_hal - $a[1];
	}
?>
<p style="text-align:center;font-size:18px;">DAFTAR ISI</p>
<table class="table table-bordered min">
<tbody>
	<tr>
		<td style="width:5%;">STANDAR 1</td>
		<td style="width:50%;">VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</td>
		<td style="text-align:right;width:10%;"><?php echo $hal[1];?></td>
	</tr>
	<tr>
		<td>STANDAR 2</td>
		<td>TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU</td>
		<td style="text-align:right;"><?php echo $hal[2];?></td>
	</tr>
	<tr>
		<td>STANDAR 3</td>
		<td>MAHASISWA DAN LULUSAN</td>
		<td style="text-align:right;"><?php echo $hal[3];?></td>
	</tr>
	<tr>
		<td>STANDAR 4</td>
		<td>SUMBER DAYA MANUSIA</td>
		<td style="text-align:right;"><?php echo $hal[4];?></td>
	</tr>
	<tr>
		<td>STANDAR 5</td>
		<td>KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK</td>
		<td style="text-align:right;"><?php echo $hal[5];?></td>
	</tr>
	<tr>
		<td>STANDAR 6</td>
		<td>PEMBIAYAAN, SARANA DAN PRASARANA, SERTA SISTEM INFORMASI</td>
		<td style="text-align:right;"><?php echo $hal[6];?></td>
	</tr>
	<tr>
		<td>STANDAR 7</td>
		<td>PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA</td>
		<td style="text-align:right;"><?php echo $hal[7];?></td>
	</tr>
</tbody>
</table>
<!-- END DAFTAR ISI -->