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
<?
if($id_prodi==1) { //borang 3B (fakultas)
?>

<p>
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
</p>
<br>
<p>7.1.1  Agenda dan judul penelitian dosen tetap dan judul tesis
</p>
<br>
<p>1.	Tuliskan agenda dan judul penelitian dosen tetap mengikuti format tabel berikut.

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
			<th>Nama Dosen</th>
			<th>Agenda Penelitian</th>
			<th>Judul Penelitian</th>
			<th>Keterlibatan Dengan Jaringan Penelitian</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>

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
			<td><?=$value['agenda_penelitian']?></td>
			<td><?=$value['judul_penelitian']?></td>
			<td><?=$value['keterlibatan_penelitian']?></td>		
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Keterangan :<br>
	Contoh penelitian dengan jaringan internasional: penelitian bidang kehutanan dengan lembaga Center for International Forestry Research (CIFOR), International Center for Research in Agroforestry (ICRAF). Contoh penelitian dengan jaringan nasional: penelitian yang bekerjasama dengan lembaga penelitian nasional (LIPI, BPPT, dll.)
</p>
<?php }?>

<p>
	Tuliskan judul tesis mahasiswa program magister yang lulus pada tiga tahun terakhir mengikuti format tabel berikut.
</p>
<?php
if(empty($tesis)){
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
			<th>Judul Tesis</th>
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
			<td><?=$value['nama_mhs_s2']?></td>
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
<?
}
?>