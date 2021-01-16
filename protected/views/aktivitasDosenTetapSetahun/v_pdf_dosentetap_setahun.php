<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
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
		table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
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

<p>4.3.4 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS, 
 dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut :
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

<table class="table table-bordered min">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Dosen</td>
			<td>Bidang Keahlian</td>
			<td>Kode Mata Kuliah</td>
			<td>Nama Mata Kuliah</td>
			<td>Jumlah Kelas</td>
			<td>Jumlah Pertemuan yang Direncanakan</td>
			<td>Pertemuan yang Dilaksanakan</td>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td>1</td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['bidang_keahlian']?></td>
			<td><?=$value['kode_mk']?></td>
			<td><?=$value['nama_mk']?></td>
			<td><?=$value['jum_kelas']?></td>
			<td><?=$value['jum_rencana_pertemuan']?></td>
			<td><?=$value['jum_pertemuan_terlaksana']?></td>
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