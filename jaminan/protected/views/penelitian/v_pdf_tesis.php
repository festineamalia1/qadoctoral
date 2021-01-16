<style type="text/css">
	table{
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
		font-weight: bold;
		margin-bottom: 25px;
	}
</style>

<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
</p>
<p>7.1.1  Agenda dan judul penelitian dosen tetap dan judul disertasi
</p>
<p>Tuliskan judul disertasi mahasiswa program doktor yang lulus pada lima tahun terakhir mengikuti format tabel berikut.

</p>
<br>
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
			<th>Nama Mahasiswa</th>
			<th>Judul Disertasi</th>
			<th>Nama Dosen Pembimbing</th>
		</tr>
			<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;
		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_mhs_s3']?></td>
			<td><?=$value['judul_tesis']?></td>
			<td><?=$value['nama_dosen']?></td>	
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?php } ?>