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
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<?
if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?
} else {
?>
	<p>
		3.1.3   Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). 
	</p>
	<?php
	if(empty($dt)){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>Jenis Prestasi</th>
				<th>Nama Kegiatan,Waktu dan Tempat Penyelenggaraan</th>
				<th>Tingkat</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			foreach ($dt as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td><?=$value['nama_mhs_s3']?></td>
				<td><?=$value['jenis_prestasi']?></td>
				<td><?=$value['nama_kegiatan']?>, <?=$value['wkt_penyelenggaraan']?>, <?=$value['tempat']?></td>
				<td><?=$value['tingkat']?></td>
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
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/prestasimhs/CetakPDFPrestasiMhs/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
}
?>

