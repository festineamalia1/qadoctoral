<style type="text/css">
	table{
		border: thin solid black;
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin ;solid black;
		border-top: thin ;solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
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
		font-size: 14px;
		margin-bottom: 25px;
	}
	table.min{
		font-size: 11px;
	}
	table.min th{
		border: thin solid black;
		text-align: center;
		vertical-align: middle;
		padding: 10px;
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

<p>
	4.5.2 Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS
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
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Jenjang Pendidikan Lanjut</th>
			<th>Bidang Studi</th>
			<th>Perguruan Tinggi</th>
			<th>Negara</th>
			<th>Tahun Mulai Studi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['pendidikan_lanjut']?></td>
			<td><?=$value['bidang_studi']?></td>
			<td><?=$value['PT']?></td>
			<td><?=$value['negara']?></td>
			<td><?=$value['th_mulai_studi']?></td>		
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