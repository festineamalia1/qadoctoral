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
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
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


<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
	3.1.2 Tuliskan data mahasiswa non-reguler dalam lima tahun terakhir dengan mengikuti format tabel berikut:
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Tahun Akademik</th>
			<th rowspan="2">Daya Tampung</th>
			<th rowspan="1" colspan="2">Jumlah Calon Mhs Reguler</th>
			<th rowspan="1" colspan="2">Jumlah Mhs Baru</th>
			<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
		</tr>
		<tr>
			<th colspan="1">Ikut Seleksi</th>
			<th colspan="1">Lulus Seleksi</th>
			<th colspan="1">Non Reguler</th>
			<th colspan="1">Transfer</th>
			<th colspan="1">Non Reguler</th>
			<th colspan="1">Transfer</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td style="text-align:center;"><?=$value['th_akademik']?></td>
			<td style="text-align:center;"><?=$value['daya_tampung']?></td>
			<td style="text-align:center;"><?=$value['jml_ikut_seleksi']?></td>
			<td style="text-align:center;"><?=$value['jml_lulus_seleksi']?></td>
			<td style="text-align:center;"><?=$value['jml_maba_nonreg']?></td>
			<td style="text-align:center;"><?=$value['jml_transfer']?></td>
			<td style="text-align:center;"><?=$value['tot_mhs_nonreg']?></td>
			<td style="text-align:center;"><?=$value['tot_transfer']?></td>
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?
}
?>