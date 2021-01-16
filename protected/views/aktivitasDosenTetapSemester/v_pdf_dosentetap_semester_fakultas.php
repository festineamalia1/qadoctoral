<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
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
		table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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

<p class="ket_atas">
	4.3.3 Aktivitas dosen tetap yang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik
	terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)
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
			<td rowspan="2">No</td>
			<td rowspan="2">Nama Dosen Tetap</td>
			<td rowspan="1" colspan="3">Sks Pengajaran</td>
			<td rowspan="2">Sks Penelitian</td>
			<td rowspan="2">Sks Pengabdian Kepada Masyarakat</td>
			<td rowspan="1" colspan="2">Sks Manajemen</td>
			<td rowspan="2">Jumlah Sks</td>
		</tr>
		<tr>
			<td colspan="1">PS Sendiri</td>
			<td colspan="1">PS lain PT Sendiri</td>
			<td colspan="1">PT lain</td>
			<td colspan="1">PT Sendiri</td>
			<td colspan="1">PT lain</td>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td>1</td>
			<td><?=$value['nama_dosen_tetap']?></td>
			<td><?=$value['sks_PSsendiri']?></td>
			<td><?=$value['sks_PSlain_PTsendiri']?></td>
			<td><?=$value['sks_PSPTlain']?></td>
			<td><?=$value['sks_penelitian']?></td>
			<td><?=$value['sks_pkm']?></td>
			<td><?=$value['sks_manajemen_PTsendiri']?></td>
			<td><?=$value['sks_manajemen_PTlain']?></td>
			<td><?=$value['jum_sks']?></td>
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Catatan:<br>
	Sks pengajaran sama dengan sks matakuliah yang diajarkan.  Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel
	adalah 1/2 kali sks matakuliah.<br>
	*   rata-rata adalah jumlah sks dibagi dengan jumlah dosen tetap.<br>
	**  sks manajemen dihitung sbb :<br>
	Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.<br>
	- rektor 12 sks<br>
	- pembantu rektor / dekan 10 sks<br>
	- ketua sekolah tinggi / pembantu dekan 8 sks<br>
	- ketua jurusan / ketua PS 6 sks<br>
	- sekretaris jurusan/ sekretaris PS 6 sks<br>
	- ketua laboratorium universitas/institut/sekolah tinggi 6 sks<br>
	- ketua laboratorium jurusan/PS 3 sks<br>
	Bagi  PT  yang  memiliki  struktur  organisasi  yang  berbeda,  beban  kerja  manajemen  untuk  jabatan  baru  disamakan  dengan  beban  kerja  jabatan
	yang setara.
</p>

<?
}
?>