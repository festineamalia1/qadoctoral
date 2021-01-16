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
	7.1.3 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun
	terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format
	tabel berikut:
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
			<th rowspan="2">No</th>
			<th rowspan="2">Judul</th>
			<th rowspan="2">Nama-nama Dosen</th>
			<th rowspan="2">Dihasilkan/Dipublikasikan pada</th>
			<th rowspan="2">Tahun Penyajian/Publikasi</th>
			<th rowspan="1" colspan="3">Tingkat*<th>
		</tr>
		<tr>
			<th colspan="1">Lokal</th>
			<th colspan="1">Nasional</th>
			<th colspan="1">Internasional</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>	 
			<td><?=$value['judul']?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['publikasi']?></td>	
			<td><?=$value['th_publikasi']?></td>	
			<td><?=$value['tingkat']?></td>	
			<td><?=$value['status_haki']?></td>
			<td><?=$value['status_haki']?></td>		
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Catatan:*= Tuliskan banyaknya dosen pada sel yang sesuai
</p>
<?
}
?>