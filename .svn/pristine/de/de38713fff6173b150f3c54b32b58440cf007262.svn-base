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

<p>5.5 Pembimbingan Tugas Akhir / Skripsi</p>
<p>5.5.1 Pelaksanaan pembimbingan Tugas Akhir atau Skripsi pada PS</p>
<ul>
	<li>Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA) <b><?=(isset($pelaksanaan['rata_mhs_perdosen']) ? $pelaksanaan['rata_mhs_perdosen'] : '....')?></b> mahasiswa/ dosen TA.</li>
	<li>Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir: <b><?=(isset($pelaksanaan['rata_jum_pertemuan'])? $pelaksanaan['rata_jum_pertemuan'] : '....' )?></b> kali mulai dari saat mengambil TA hingga menyelesaikan TA.</li>
	<li>Nama dosen yang menjadi pembimbing tugas akhir dan skripsi beserta jumlah mahasiswa yang dibimbing :</li>
</ul>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th style="width:20px;">No.</th>
			<th>Nama Dosen Pembimbing</th>
			<th>Jumlah Mahasiswa</th>
		</tr>
		<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i = 0;
		foreach ($data as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center"><?=$i?></td>
				<td><?=$value['nama_dosen']?></td>
				<td style="text-align:center"><?=$value['jml_mhs']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?php } ?>
<br>
<ul>
	<li>Ketersediaan panduan pembimbingan tugas akhir : (berilah tanda V pada pilihan yang sesuai)</li>
</ul>
<?php
if(empty($pelaksanaan)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="margin-left:30px;">
	<?=($pelaksanaan['ketersediaan_panduan'] == 'ya')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">': '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/kotak.png">'?> Ya
	<br>
	<?=($pelaksanaan['ketersediaan_panduan'] == 'tidak')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">': '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/kotak.png">'?> Tidak
</div>
<p style="margin-left:20px;margin-top:10px;">
	Jika Ya, jelaskan cara sosialisasi dan pelaksanaannya :
</p>
<div style="border:1px solid black;padding:5px;">
	<?=$pelaksanaan['sosialisasi_pelaksanaan']?>
</div>
<?php } ?>
<br>
<p>5.5.2 Rata-rata penyelesaian tugas akhir/ skripsi pada tiga tahun terakhir : <?=($pelaksanaan['waktu_penyelesaian'] != '')? $pelaksanaan['waktu_penyelesaian']: '...'?> bulan (menurut kurikulum tugas akhir direncanakan  <?=($pelaksanaan['waktu_direncanakan'] != '')? $pelaksanaan['waktu_direncanakan']: '...'?> semester).</p>
