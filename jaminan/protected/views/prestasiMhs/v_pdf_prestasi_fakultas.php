<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 8px;
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
</style>
<?
if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?
} else {
?>
	<p>
		3.1.3   Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). 
	</p>
	<?php
	if(empty($dt)){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>Jenis Prestasi</th>
				<th>Nama Kegiatan,Waktu dan Tempat Penyelenggaraan</th>
				<th>Tingkat</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			foreach ($dt as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td><?=$value['nama_mhs_s2']?></td>
				<td><?=$value['jenis_prestasi']?></td>
				<td><?=$value['nama_kegiatan']?>, <?=$value['wkt_penyelenggaraan']?>, <?=$value['tempat']?></td>
				<td><?=$value['tingkat']?></td>
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
}
	?>