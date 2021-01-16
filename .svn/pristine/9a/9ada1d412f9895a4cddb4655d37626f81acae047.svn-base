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
		text-align: left;
		font-weight: bold;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>

<p>
7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir<br/><br/>
7.1.1 1 1.	Tuliskan agenda dan judul penelitian dosen tetap mengikuti format tabel berikut.
</p>
<?
if((empty($data))){
?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
<?
} else {
?>
<table class="table table-bordered min">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Dosen</th>
			<th rowspan="2">Agenda dan Judul Penelitian</th>
			<th rowspan="2">Judul Penelitian</th>
			<th rowspan="2">Keterlibatan dengan Jaringan Penelitian</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>	 
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
*Contoh penelitian dengan jaringan internasional: penelitian bidang kehutanan dengan lembaga Center for International Forestry Research (CIFOR), International Center for Research in Agroforestry (ICRAF). Contoh penelitian dengan jaringan nasional: penelitian yang bekerjasama dengan lembaga penelitian nasional (LIPI, BPPT, dll.)
</p>
