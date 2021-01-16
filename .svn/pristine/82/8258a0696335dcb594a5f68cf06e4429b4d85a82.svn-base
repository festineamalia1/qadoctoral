<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
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
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p>
	4.5.4 Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).
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
		<tr>
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Prestasi yang dicapai*</th>
			<th>Waktu Pencapaian</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
		</tr>

		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>	 
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['prestasi']?></td>
			<td><?=$value['waktu']?></td>	
			<td><?=$value['tingkat']?></td>	
		</tr>
		<?php
		}
		?>
</table>
<p class="keterangan">
	*Sediakan dokumen pendukung pada saat asesmen lapangan
</p>
<?
}
?>