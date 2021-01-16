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
7.2   Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM) dalam Lima Tahun 
Terakhir
</p>
<p>7.2.2 Tuliskan nama dosen, judul, waktu dan hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat</p>

<table class="table table-bordered min">
<thead>
<tr>
	<th>No</th>
	<th>Nama Dosen</th>
	<th>Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
	<th>Waktu Kegiatan</th>
	<th>Hasil atau Dampak Kegiatan</th>
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
	if(isset($data)){
		$i=1;
		foreach ($data as $key => $value) {
			?>
			<tr>
			<td style="text-align:center"><?=$i?></td>
			<td style="text-align:center"><?=$value['nama_dosen']?></td>
			<td style="text-align:center"><?=$value['judul_kegiatan_pengabdian']?></td>
			<td style="text-align:center"><?=$value['wkt_awl']?></td>
			<td style="text-align:center"><?=$value['hasil']?></td>
			</tr>			
			<?
			 // $num++;
		}

	}
?>

</tbody>
</table>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian/CetakPDFpelayanan/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>