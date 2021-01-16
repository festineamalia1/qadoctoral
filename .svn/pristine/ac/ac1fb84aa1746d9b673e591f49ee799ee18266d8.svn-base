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
	7.1.4 Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang
	memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.
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
			<th>Karya*</th>
			
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
			
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	*Lampirkan surat paten HaKI atau keterangan sejenis.
</p>
<?
}
?>