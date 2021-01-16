<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 7px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.ket_atas{
		font-size: 12px;
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>
	4.4.2 Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan
	mengikuti format tabel berikut:
</p>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen Tdk Tetap</th>
			<th>Bidang Keahlian</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Jumlah pertemuan yang Dilaksanakan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;

		$tot_jum_rencana_pertemuan=0;
		$tot_jum_pertemuan_terlaksana=0;
		
		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['bidang_keahlian']?></td>
			<td><?=$value['kode_mk']?></td>
			<td><?=$value['nama_mk']?></td>
			<td style="text-align:center"><?=$value['jum_kelas']?></td>
			<td style="text-align:center"><?=$value['jum_rencana_pertemuan']?></td>
			<td style="text-align:center"><?=$value['jum_pertemuan_terlaksana']?></td>
		</tr>
		<?php
		$tot_jum_rencana_pertemuan +=$value['jum_rencana_pertemuan'];
		$tot_jum_pertemuan_terlaksana +=$value['jum_pertemuan_terlaksana'];
		}
		?>
		
	</tbody>
	<tfoot>
		<tr>
			<th rowspan="1" colspan="6">Jumlah</td>
			<td style="text-align:center"><?=$tot_jum_rencana_pertemuan?></td>
			<td style="text-align:center"><?=$tot_jum_pertemuan_terlaksana?></td>
		</tr>
	</tfoot>
</table>
<?php } ?>