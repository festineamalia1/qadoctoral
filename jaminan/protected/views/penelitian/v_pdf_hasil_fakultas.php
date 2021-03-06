<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 7px;
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
		margin-bottom: 25px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>
<p>
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
</p>
<p>7.1.5  Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dipublikasikan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dalam lima tahun terakhir dengan mengikuti format tabel berikut
</p>
<br>
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
				<th width="35px">No</th>
				<th>Judul</th>
				<th>Nama Dosen</th>
				<th>Dipublikasikan Pada</th>
				<th>Tahun Penyajian/Publikasi</th>
				<th>Nama Lembaga</th>
				<th rowspan="1" colspan="3">Tingkat</th>
			</tr>
			<tr>
				<th colspan="1">Lokal/Nasional Tidak Terakreditasi</th>
				<th colspan="1">Nasional Terakreditasi</th>
				<th colspan="1">Internasional (LAN)</th>
			</tr>

			<tr>
				<th colspan="1">(1)</th>
				<th colspan="1">(2)</th>
				<th colspan="1">(3)</th>
				<th colspan="1">(4)</th>
				<th colspan="1">(5)</th>
				<th colspan="1">(6)</th>
				<th colspan="1">(7)</th>
				<th colspan="1">(8)</th>
				<th colspan="1">(9)</th>
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
				<td><?=$value['judul']?></td>
				<td><?=$value['publikasi']?></td>
				<td><?=$value['th_publikasi']?></td>
				<td><?=$value['lembaga_publikasi']?></td>
				<td style="text-align:center;"><?=($value['tingkat'] == 'lokal')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['tingkat'] == 'nasional')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['tingkat'] == 'internasional')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>	
			</tr>
			<?php
			}
			?>
		
	</tbody>
		<tfoot>

		</tfoot>
	</table>

	<p class="keterangan">
		Keterangan :<br>
		(1)  Beri tanda “*” pada artikel yang dikutip (masuk dalam citation index)
		(2)  Contoh nama lembaga sitasi:Thompson Reuters Web of Science, Elsevier Scopus, Google Scholar.
		(3)  Beri tanda √ pada kolom yang sesuai.

	</p>

<?php
}
?>