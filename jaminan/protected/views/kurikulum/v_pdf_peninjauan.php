<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 8px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 8px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
		font-weight: bold;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
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
<p>5.1.3 Peninjauan Kurikulum dalam 5 Tahun Terakhir</p>
		<p style="padding-left:25px;margin-top:-10px">Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.</p>
		<?php
		if(empty($mekanisme)){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?=$mekanisme['mekanisme_pihak']?>
		</div>
		<?php } ?>
		<br>
		<p style="padding-left:25px">Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut : </p>
		<?php
		if(empty($data)){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
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
						<td style="text-align:center;"><?=($value['perubahan_silabus'] == 'ada') ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-' ?></td>
						<td style="text-align:center;"><?=($value['perubahan_buku_ajar']== 'ada') ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-' ?></td>
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
<?
}
?>