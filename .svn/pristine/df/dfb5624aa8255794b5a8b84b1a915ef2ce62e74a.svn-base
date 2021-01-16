<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 5px;
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
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Karya*</th>	
		</tr>
		<tr>
			<th>(1)</th>
			<th>(2)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;
		foreach ($data as $key => $value) {
		$i++;
		?>
		<tr>
			<td width="50px" style="text-align:center"><?=$i?></td>
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
<?php } ?>