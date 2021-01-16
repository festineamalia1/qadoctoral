<style type="text/css">
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
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
4.3.3 Aktivitas dosen tetap yang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik
terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)
</p>
<table class="table table-bordered min">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Dosen Tetap</th>
			<th rowspan="1" colspan="3">Sks Pengajaran</th>
			<th rowspan="2">Sks Penelitian</th>
			<th rowspan="2">Sks Pengabdian Kepada Masyarakat</th>
			<th rowspan="1" colspan="2">Sks Manajemen**</th>
			<th rowspan="2">Jumlah Sks</th>
		</tr>
		<tr>
			<th colspan="1">PS Sendiri</th>
			<th colspan="1">PS lain PT Sendiri</th>
			<th colspan="1">PT lain</th>
			<th colspan="1">PT Sendiri</th>
			<th colspan="1">PT lain</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$i=0;
			$tot_sks_PSsendiri=0;
			$rata_sks_PSsendiri=0;

			$tot_sks_PSlain_PTsendiri=0;
			$rata_sks_PSlain_PTsendiri=0;

			$tot_sks_PSPTlain=0;
			$rata_sks_PSPTlain=0;

			$tot_sks_penelitian=0;
			$rata_sks_penelitian=0;

			$tot_sks_pkm=0;
			$rata_sks_pkm=0;

			$tot_sks_manajemen_PTsendiri=0;
			$rata_sks_manajemen_PTsendiri=0;

			$tot_sks_manajemen_PTlain=0;
			$rata_sks_manajemen_PTlain=0;

			$tot_jum_sks=0;
			$rata_jum_sks=0;


		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen_tetap']?></td>
			<td style="text-align:center"><?=$value['sks_PSsendiri']?></td>
			<td style="text-align:center"><?=$value['sks_PSlain_PTsendiri']?></td>
			<td style="text-align:center"><?=$value['sks_PSPTlain']?></td>
			<td style="text-align:center"><?=$value['sks_penelitian']?></td>
			<td style="text-align:center"><?=$value['sks_pkm']?></td>
			<td style="text-align:center"><?=$value['sks_manajemen_PTsendiri']?></td>
			<td style="text-align:center"><?=$value['sks_manajemen_PTlain']?></td>
			<td style="text-align:center"><?=$value['jum_sks']?></td>
		</tr>
		<?php
			$tot_sks_PSsendiri += $value['sks_PSsendiri'];
			$rata_sks_PSsendiri = $tot_sks_PSsendiri/$i;

			$tot_sks_PSlain_PTsendiri += $value['sks_PSlain_PTsendiri'];
			$rata_sks_PSlain_PTsendiri = $tot_sks_PSlain_PTsendiri/$i;

			$tot_sks_PSPTlain += $value['sks_PSPTlain'];
			$rata_sks_PSPTlain = $tot_sks_PSPTlain/$i;

			$tot_sks_penelitian += $value['sks_penelitian'];
			$rata_sks_penelitian = $tot_sks_penelitian/$i;

			$tot_sks_pkm += $value['sks_pkm'];
			$rata_sks_pkm = $tot_sks_pkm/$i;

			$tot_sks_manajemen_PTsendiri += $value['sks_manajemen_PTsendiri'];
			$rata_sks_manajemen_PTsendiri = $tot_sks_manajemen_PTsendiri/$i;

			$tot_sks_manajemen_PTlain +=$value['sks_manajemen_PTlain'];
			$rata_sks_manajemen_PTlain = $tot_sks_manajemen_PTlain/$i;

			$tot_jum_sks +=$value['jum_sks'];
			$rata_jum_sks = $tot_jum_sks/$i;
		}
		?>

		
	</tbody>
	<tfoot>
		<tr>
			<th rowspan="1" colspan="2">Jumlah </th>
			<th><?=$tot_sks_PSsendiri?></th>
			<th><?=$tot_sks_PSlain_PTsendiri?></th>
			<th><?=$tot_sks_PSPTlain?></th>
			<th><?=$tot_sks_penelitian?></th>
			<th><?=$tot_sks_pkm?></th>
			<th><?=$tot_sks_manajemen_PTsendiri?></th>
			<th><?=$tot_sks_manajemen_PTlain?></th>
			<th><?=$tot_jum_sks?></th>	
		</tr>
		<tr>
			<th rowspan="1" colspan="2">Rata-rata*</th>
			<th><?=$rata_sks_PSsendiri?></th>
			<th><?=$rata_sks_PSlain_PTsendiri?></th>
			<th><?=$rata_sks_PSPTlain?></th>
			<th><?=$rata_sks_penelitian?></th>
			<th><?=$rata_sks_pkm ?></th>
			<th><?=$rata_sks_manajemen_PTsendiri?></th>
			<th><?=$rata_sks_manajemen_PTlain?></th>
			<th><?=$rata_jum_sks?></th>
		</tr>


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

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/AktivitasDosenTetapSemester/CetakPDFDosentetap_semester/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>