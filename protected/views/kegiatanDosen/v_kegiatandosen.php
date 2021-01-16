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

	<p>
		4.5.3 Kegiatan  dosen  tetap  yang  bidang  keahliannya  sesuai  dengan  PS  dalam  seminar  ilmiah/lokakarya/penataran/workshop/pagelaran/
		pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri
	</p>

<table class="table table-bordered min">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Dosen</th>
			<th rowspan="2">Jenis Kegiatan*</th>
			<th rowspan="2">Tempat</th>
			<th rowspan="2">Waktu</th>
			<th rowspan="1" colspan="2">Sebagai</th>
		</tr>
		<tr>
			<th rowspan="1">Penyaji</th>
			<th rowspan="1">Peserta</th>
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
			<td><?=$value['jenis_kegiatan']?></td>
			<td><?=$value['tempat']?></td>
			<td><?=$value['waktu']?></td>
			<td><?=$value['sebagai']?></td>
			<td><?=$value['sebagai']?></td>	
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	*Jenis Kegiatan: Seminar ilmiah, Lokakarya, Penataran/Pelatihan,<i> Workshop,</i> Pagelaran, Pameran, Peragaan dll
</p>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/KegiatanDosen/CetakPDFkegiatandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>