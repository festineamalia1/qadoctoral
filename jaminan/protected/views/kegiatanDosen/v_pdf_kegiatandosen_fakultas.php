<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
	4.5 Upaya Peningkatan Sumber Daya Manusia (Kegiatan Dosen Tetap) <br><br>
	<p>4.5.2 Keikutsertaan dosen tetap dalam kegiatan seminar ilmiah / lokakarya / penataran / workshop / pagelaran / pameran / peragaan yang melibatkan pakar / ahli dari luar PT</p></br> 

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
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>
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
	*Jenis Kegiatan: Seminar ilmiah, Lokakarya, Penataran / Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll
</p>
<?
}
?>