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

<?
if ($id_prodi==1) {
?>
<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
</p>
<p>7.1.5  Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dipublikasikan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dalam lima tahun terakhir dengan mengikuti format tabel berikut
</p>
<br>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?
} else {
?>

<p class="judul" style="font-weight:bold;">
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
				<th rowspan="2">No</th>
				<th rowspan="2">Judul</th>
				<th rowspan="2">Nama-nama Dosen</th>
				<th rowspan="2">Dipublikasikan Pada</th>
				<th rowspan="2">Tahun Penyajian/Publikasi</th>
				<th rowspan="2">Nama Lembaga</th>
				<th rowspan="1" colspan="3">Tingkat</th>
			</tr>
			<tr>
				<th rowspan="1">Lokal/Nasional Tidak Terakreditasi</th>
				<th rowspan="1">Nasional Terakreditasi</th>
				<th rowspan="1">Internasional (LAN)</th>
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
				<td><?=$value['nama_dosen']?></td>
				<td><?=$value['publikasi']?></td>
				<td><?=$value['th_publikasi']?></td>
				<td><?=$value['lembaga_akreditasi']?></td>
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
	<?php } ?>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian_Dosentetap_Ps_S2/CetakPDFhasil/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
	<?
	}

?>
