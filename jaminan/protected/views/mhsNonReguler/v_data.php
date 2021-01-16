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
if ($id_prodi==1) {
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	<?php
	if(empty($data)){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<p>
		3.1.2 Tuliskan data mahasiswa non-reguler<sup>(2)</sup> dalam lima tahun terakhir dengan mengikuti format tabel berikut:
	</p>
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th rowspan="2">Tahun Akademik</th>
				<th rowspan="2">Daya Tampung</th>
				<th rowspan="1" colspan="2">Jumlah Calon Mhs Reguler</th>
				<th rowspan="1" colspan="2">Jumlah Mhs Baru</th>
				<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
			</tr>
			<tr>
				<th colspan="1">Ikut Seleksi</th>
				<th colspan="1">Lulus Seleksi</th>
				<th colspan="1">Non Reguler</th>
				<th colspan="1">Transfer<sup>(2)</sup></th>
				<th colspan="1">Non Reguler</th>
				<th colspan="1">Transfer<sup>(2)</sup></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td style="text-align:center;"><?=$value['th_akademik']?></td>
				<td style="text-align:center;"><?=$value['daya_tampung']?></td>
				<td style="text-align:center;"><?=$value['jml_ikut_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_lulus_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_maba_nonreg']?></td>
				<td style="text-align:center;"><?=$value['jml_transfer']?></td>
				<td style="text-align:center;"><?=$value['tot_mhs_nonreg']?></td>
				<td style="text-align:center;"><?=$value['tot_transfer']?></td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsnonreguler/CetakPDFMhsNonReguler/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}
}
?>