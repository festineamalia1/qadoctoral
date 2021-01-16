<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 7px;
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
	.ket_atas{
		font-size: 12px;
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<!--?php
if($id_prodi==1) { //borang 3B (fakultas)
?-->

<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>

<p>
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
</p>
<p>7.1.1  Agenda dan judul penelitian dosen tetap dan judul disertasi
</p>
<p>	Tuliskan agenda dan judul penelitian dosen tetap mengikuti format tabel berikut.

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
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th width="35px">No</th>
				<th>Nama Dosen</th>
				<th>Agenda Penelitian</th>
				<th>Judul Penelitian</th>
				<th>Keterlibatan dengan Jaringan</th>
			</tr>
			<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
			<th>(5)</th>
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
	<?php } ?>
	
	<br>
	<p>Tuliskan judul disertasi mahasiswa program doktor yang lulus pada lima tahun terakhir mengikuti format tabel berikut.

</p>
<br>
	<?php
	if(empty($disertasi)){
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
				<th width="35px">No</th>
				<th>Nama Mahasiswa</th>
				<th>Judul Disertasi</th>
				<th>Nama Dosen Pembimbing</th>
			</tr>
			<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			foreach ($disertasi as $key => $value) {
				$i++;
			?>
			<tr>
				<td style="text-align:center"><?=$i?></td>
				<td><?=$value['nama_mhs_s3']?></td>
				<td><?=$value['judul_disertasi']?></td>
				<td><?=$value['nama_dosen']?></td>	
			</tr>
			<?php
			}
			?>


			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php
	 
}
	 

	  ?>
