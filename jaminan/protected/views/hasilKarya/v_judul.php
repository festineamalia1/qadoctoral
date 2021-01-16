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
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>
<?
} else {
?>
	<p>
		7.1.3 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun
		terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format
		tabel berikut:
	</p>
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
				<th rowspan="2" colspan="1">No</th>
				<th rowspan="2" colspan="1">Judul</th>
				<th rowspan="2" colspan="1">Nama-nama Dosen</th>
				<th rowspan="2" colspan="1">Dihasilkan/Dipublikasikan pada</th>
				<th rowspan="2" colspan="1">Tahun Penyajian/Publikasi</th>
				<th rowspan="1" colspan="3">Tingkat*</th>
			</tr>
			<tr>
				<th colspan="1">Lokal</th>
				<th colspan="1">Nasional</th>
				<th colspan="1">Internasional</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			$lokal = $nasional = $internasional = 0;
			
			foreach ($data as $key => $value) {
				if($value['tingkat'] == 'lokal'){
					$lokal++;
				}
				if($value['tingkat'] == 'nasional'){
					$nasional++;
				}
				if($value['tingkat'] == 'internasional'){
					$internasional++;
				}
				$i++;
			?>
			<tr>
				<td style="text-align:center"><?=$i?>			</td>	 
				<td><?=$value['judul']?>		</td>
				<td><?=$value['nama_dosen']?>	</td>
				<td><?=$value['publikasi']?>	</td>	
				<td style="text-align:center"><?=$value['th_publikasi']?>	</td>	
				<td><?=($value['tingkat'] == 'lokal')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?>	</td>	
				<td><?=($value['tingkat'] == 'nasional')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?>	</td>	
				<td><?=($value['tingkat'] == 'internasional')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?>	</td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>
				<tr>
					<th rowspan="1" colspan="5">Jumlah</th>
					<th rowspan="1" colspan="1">nc=<?=$lokal?></th>
					<th rowspan="1" colspan="1">nb=<?=$nasional?></th>
					<th rowspan="1" colspan="1">na=<?=$internasional?></th>
				</tr>
		</tfoot>
	</table>
	<p class="keterangan">
		Catatan:*= Tuliskan banyaknya dosen pada sel yang sesuai
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/hasilkarya/CetakPDFjudul/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
}
?>