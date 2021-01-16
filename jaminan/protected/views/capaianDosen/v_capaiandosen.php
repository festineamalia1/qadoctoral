<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 11px;
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
if($id_prodi == 1){
	?>
	<p>
		4.5 Upaya Peningkatan Sumber Daya Manusia (Prestasi Dosen Tetap)
	</p>
	<p style="padding-left:25px;">
		Sebutkan pencapaian prestasi/reputasi dosen tetap (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat) berupa hadiah dan penghargaan lainnya.
	</p>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	<p>
		4.5.4 Sebutkan pencapaian prestasi/reputasi dosen tetap (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat) berupa hadiah dan penghargaan lainnya.
	</p>
	<?php
	if(empty($data)){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	?>
		<table class="table table-bordered min">
				<tr>
					<th>No</th>
					<th>Nama Dosen</th>
					<th>Prestasi yang dicapai*</th>
					<th>Waktu Pencapaian</th>
					<th>Tingkat (Lokal, Nasional, Internasional)</th>
						<th>Bidang (Pendidikan, Penelitian, Pelayanan/Pengabdian Masyarakat, Lain-lain)</th>
				</tr>

				<?php
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
				?>
				<tr>
					<td style="text-align:center"><?=$i?></td>	 
					<td><?=$value['nama_dosen']?></td>
					<td><?=$value['prestasi']?></td>
					<td><?=$value['waktu']?></td>	
					<td><?=$value['tingkat']?></td>	
					<td><?=$value['bidang']?></td>	
				</tr>
				<?php
				}
				?>
		</table>
		<p class="keterangan">
			*Sediakan dokumen pendukung pada saat asesmen lapangan
		</p>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/capaiandosen/CetakPDFcapaiandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>

	<?
	}
}
?>