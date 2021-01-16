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
	<?
		if($id_prodi==1) {
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada.
		</div>
	<?
		} else {
	?>
				<p>5.6 Upaya Perbaikan Pembelajaran</p>
				<p style="padding-left:25px">Uraikan upaya perbaikan pembelajaran serta hasil yang telah dilakukan dan dicapai dalam tiga tahun terakhir dan hasilnya.</p>
				<table class="table table-bordered kusus">
					<thead>
						<tr>
							<th rowspan="2" style="width:200px;">Butir</th>
							<th rowspan="1" colspan="2">Upaya Perbaikan</th>
						</tr>
						<tr>
							<th colspan="1">Tindakan</th>
							<th colspan="1">Hasil</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Materi</td>
							<td><?=$data['materi_tindakan']?></td>
							<td><?=$data['materi_hasil']?></td>
						</tr>
						<tr>
							<td>Metode Pembelajaran</td>
							<td><?=$data['metode_tindakan']?></td>
							<td><?=$data['metode_hasil']?></td>
						</tr>
						<tr>
							<td>Penggunaan Teknologi Pembelajaran</td>
							<td><?=$data['teknologi_tindakan']?></td>
							<td><?=$data['teknologi_hasil']?></td>
						</tr>
						<tr>
							<td>Cara-cara evaluasi</td>
							<td><?=$data['evaluasi_tindakan']?></td>
							<td><?=$data['evaluasi_hasil']?></td>
						</tr>
						<tr>
							<td>...</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
					<tfoot>

					</tfoot>
				</table>
				<div class="row-fluid">
					<div class="span12" style="text-align:right;margin-top:50px;">
						<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFperbaikan/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
					</div>
				</div>
	<?
		}
	?>

<?
}
?>