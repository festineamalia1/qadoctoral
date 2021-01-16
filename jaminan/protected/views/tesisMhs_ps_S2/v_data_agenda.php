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
<?
if ($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?php
} else {
?>

<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
</p>
<p>7.1.1  Agenda dan judul penelitian dosen tetap dan judul tesis
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
	<p>Tuliskan judul tesis mahasiswa program magister yang lulus pada tiga tahun terakhir mengikuti format tabel berikut.

</p>
<br>
	<?php
	if(empty($tesis)){
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
				<th>Judul Tesis</th>
				<th>Nama Dosen Pembimbing</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			foreach ($tesis as $key => $value) {
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
	<? } ?>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/tesisMhs_ps_S2/CetakPDFagenda/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}

?>