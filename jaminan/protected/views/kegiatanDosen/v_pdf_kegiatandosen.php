<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 8px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>
	4.5 Upaya Peningkatan Sumber Daya Manusia (Kegiatan Dosen Tetap) <br><br>
	4.5.2 Keikutsertaan dosen tetap dalam kegiatan seminar ilmiah / lokakarya / penataran / workshop / pagelaran / pameran / peragaan yang melibatkan pakar / ahli dari luar PT
</p> </br>
<?php 
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered min">
	<thead>
		<tr>
			<th rowspan="2">No.</th>
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
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(7)</th>
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
			<td style="text-align:center;"><?=($value['sebagai'] == 'penyaji')? '<img style="max-width:15px;" src='.Yii::app()->baseUrl.'/images/centang.png>':'-'?></td>
			<td style="text-align:center;"><?=($value['sebagai'] == 'peserta')? '<img style="max-width:15px;" src='.Yii::app()->baseUrl.'/images/centang.png>':'-'?></td>	
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	*Jenis Kegiatan: Seminar ilmiah, Lokakarya, Penataran / Pelatihan, <i>Workshop,</i> Pagelaran, Pameran, Peragaan dll
</p>
<?php } ?>