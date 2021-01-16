<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
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

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p class="sub_judul">5.2 Peninjauan Kurikulum dalam 5 Tahun Terakhir</p>
<p>Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$mekanisme['mekanisme_pihak']?>
</p>
<p>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut : </p>
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
				<td></td>
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
<?
}
?>