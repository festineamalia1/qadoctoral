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
		font-size: 10px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
</p>
<p>7.1.1  Agenda dan judul penelitian dosen tetap dan judul tesis
</p>
<p>	Tuliskan agenda dan judul penelitian dosen tetap mengikuti format tabel berikut.

</p>

<?
if ($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?php
} else {
?>
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
			<a href="<?=Yii::app()->getBaseUrl(true)?>/Penelitian_Dosentetap_Ps_S2/CetakPDFagenda/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}

?>