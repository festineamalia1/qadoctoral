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
			<p>5.2 Peninjauan Kurikulum dalam 5 Tahun Terakhir</p>
			<p style="padding-left:25px;margin-top:-10px">Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.</p>
			<div style="border:1px solid black;padding:5px;">
				<?=$mekanisme['mekanisme_pihak']?>
			</div>
			<p style="padding-left:25px">Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut : </p>
			<table class="table table-bordered kusus">
				<thead>
					<tr>
						<th rowspan="2">No.</th>
						<th rowspan="2">No. MK</th>
						<th rowspan="2">Nama MK</th>
						<th rowspan="2">MK Baru/ Lama/ Hapus</th>
						<th rowspan="1" colspan="2">Perubahan pada</th>
						<th rowspan="2">Alasan Peninjauan</th>
						<th rowspan="2">Atas Usulan/ Masukan dari</th>
						<th rowspan="2">Berlaku mulai Sem./ Tahun</th>
					</tr>
					<tr>
						<th colspasn="1">Silabus/ SAP</th>
						<th colspasn="1">Buku Ajar</th>
					</tr>
				</thead>
				<tbody>
					<?
					$i = 0;
					foreach ($data as $key => $value) {
						$i++;
						?>
						<tr>
							<td><?=$i?></td>
							<td><?=$value['kode_mk']?></td>
							<td><?=isset($value['nama_mk'])?  $value['nama_mk'] : '-'?></td>
							<td><?=$value['status_mk']?></td>
							<td><?=$value['perubahan_silabus']?></td>
							<td><?=$value['perubahan_buku_ajar']?></td>
							<td><?=$value['alasan_peninjauan']?></td>
							<td><?=$value['pengusul']?></td>
							<td><?=$value['berlaku_mulai']?></td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpeninjauan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		}
	?>
<?
}
?>