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

	<p class="judul" style="font-weight:bold;">
	7.3   Kegiatan kerjasama dengan instansi lain dalam tiga tahun terakhir
	</p>

	<p>
		7.3.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan Program
		Studi/jurusan dalam tiga tahun terakhir
	</p>
<?
if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada.
	</div>
<?php
}
else {
?>
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
			<tr>
				<th colspan="1">(1)</th>
				<th colspan="1">(2)</th>
				<th colspan="1">(3)</th>
				<th colspan="1">(4)</th>
				<th colspan="1">(5)</th>
				<th colspan="1">(6)</th>
			</tr>

			<?php
			$i=0;
			foreach ($data as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>	 
				<td><?=$value['nama_instansi_dlm']?></td>
				<td><?=$value['jenis_kegiatan_dlm']?></td>
				<td style="text-align:center;"><?=$value['th_mulai_dlm']?></td>	
				<td style="text-align:center;"><?=$value['th_akhir_dlm']?></td>	
				<td><?=$value['manfaat_dlm']?></td>	
			</tr>
			<?php
			}
			?>
	</table>
	<p class="keterangan">
		Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian_Dosentetap_Ps_S2/CetakPDFkerjasamadalam/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?php 
}
?>