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
		font-weight: bold;
		margin-bottom: 25px;
	}
</style>

<p>
	4.5 Upaya Peningkatan Sumber Daya Manusia (Kegiatan Tenaga Ahli) <br><br>
	4.5.1Kegiatan tenaga ahli/pakar dari luar PT (tidak termasuk dosen tidak tetap) sebagai pembicara dalam seminar/pelatihan, sebagai pembicara tamu dsb. di program studi ini.
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
			<th>Nama Tenaga Ahli/Pakar</th>
			<th>Nama dan Judul Kegiatan</th>
			<th>Peran Sebagai</th>
			<th>Waktu Pelaksanaan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>
			<td><?=$value['nama_pakar']?></td>
			<td><?=$value['nama_kegiatan']?>, <?=$value['judul_kegiatan']?></td>
			<td><?=$value['sebagai']?></td>	
			<td><?=$value['waktu']?></td>	
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