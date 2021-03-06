<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
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
		font-size: 16px;
		margin-bottom: 25px;
	}
</style>

<p>
4.5 Upaya Peningkatan Sumber Daya Manusia (Pengalaman Dosen Tetap) <br><br>
	4.5.5 Sebutkan keikutsertaan dosen dalam keanggotaan pada lembaga-lembaga profesi dan ilmiah.
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
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Nama Lembga</th>
			<th>Kurun Waktu</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td style="text-align:center;"><?=$no?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['nama_lembaga']?></td>
			<td><?=$value['kurun_waktu']?></td>
			<td><?=$value['tingkat']?></td>
		</tr>
		<?php
		$no++;
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?
}
?>