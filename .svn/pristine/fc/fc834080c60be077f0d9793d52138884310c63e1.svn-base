<style type="text/css">
	.sub_judul{
		text-align: left;
		font-size: 14px;
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
	4.5.5 Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.
</p>
</p>
<table class="table table-bordered min">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Nama Organisasi Keilmuan atau Organisasi Profesi</th>
			<th>Kurun Waktu</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=0;
		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['nama_organisasi']?></td>
			<td><?=$value['kurun_waktu']?></td>
			<td><?=$value['tingkat']?></td>
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/KeikutsertaanDosen/CetakPDForganisasi/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>