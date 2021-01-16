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
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<?
		if($id_prodi==1){
	?>
			<p>
				7.3.2 Tuliskan instansi luar negeri yang menjalin kerjasama* dengan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir.
			</p>

			<table class="table table-bordered min">
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Nama Instansi</th>
						<th rowspan="2">Jenis Kegiatan</th>
						<th rowspan="1" colspan="2">Kurun Waktu Kerjasama</th>
						<th rowspan="2">Manfaat yang Telah Diperoleh</th>
					</tr>
					<tr>
						<th colspan="1">Mulai</th>
						<th colspan="1">Keluar</th>
					</tr>

					<?php
					$i=0;
					foreach ($data as $key => $value) {
					$i++;
					?>
					<tr>
						<td><?=$i?></td>	 
						<td><?=$value['nama_instansi']?></td>
						<td><?=$value['jenis_kegiatan']?></td>
						<td><?=$value['th_mulai']?></td>	
						<td><?=$value['th_akhir']?></td>	
						<td><?=$value['manfaat']?></td>	
					</tr>
					<?php
					}
					?>
			</table>
			<p class="keterangan">
				Catatan : (*) dokumen pendukung disediakan pada saat assesmen lapangan
			</p>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kerjasama/CetakPDFkerjasama_luar/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		} else {
	?>
			<p>
				7.3.2  Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan Program
				Studi/jurusan dalam tiga tahun terakhir.
			</p>

			<table class="table table-bordered min">
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Nama Instansi</th>
						<th rowspan="2">Jenis Kegiatan</th>
						<th rowspan="1" colspan="2">Kurun Waktu Kerjasama</th>
						<th rowspan="2">Manfaat yang Telah Diperoleh</th>
					</tr>
					<tr>
						<th colspan="1">Mulai</th>
						<th colspan="1">Keluar</th>
					</tr>

					<?php
					$i=0;
					foreach ($data as $key => $value) {
					$i++;
					?>
					<tr>
						<td><?=$i?></td>	 
						<td><?=$value['nama_instansi']?></td>
						<td><?=$value['jenis_kegiatan']?></td>
						<td><?=$value['th_mulai']?></td>	
						<td><?=$value['th_akhir']?></td>	
						<td><?=$value['manfaat']?></td>	
					</tr>
					<?php
					}
					?>
			</table>
			<p class="keterangan">
				Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan
			</p>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kerjasama/CetakPDFkerjasama_luar/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		}
	?>

<?
}
?>