<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
		padding: 8px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p>
	4.5 Upaya Peningkatan Sumber Daya Manusia (Prestasi Dosen) <br><br>
	4.5.4 Sebutkan pencapaian prestasi/reputasi dosen tetap (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat) berupa hadiah dan penghargaan lainnya.
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
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Prestasi yang dicapai*</th>
			<th>Waktu Pencapaian</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
			<th>Bidang (Pendidikan, Penelitian, Pelayanan/Pengabdian Masyarakat, Lain-lain)</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
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
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['prestasi']?></td>
			<td><?=$value['waktu']?></td>	
			<td><?=$value['tingkat']?></td>	
			<td><?=$value['bidang']?></td>	
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<p class="keterangan">
	*Sediakan dokumen pendukung pada saat asesmen lapangan
</p>
<?php } ?>