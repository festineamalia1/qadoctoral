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
		<p>
			3.2 Profil Mahasiswa dan Lulusan
		</p>
		<p>
			3.2.1 Tuliskan data seluruh mahasiswa dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:
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
				<th rowspan="2">Thn Akdmk</th>
				<th rowspan="2">Daya Tmpung</th>
				<th rowspan="1" colspan="2">Jumlah Calon Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
				<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Lulusan</th>
				<th rowspan="1" colspan="3">IPK Lulusan Reguler Mahasiswa Bukan Transfer</th>
				<th rowspan="2" >Jumlah Mahasiswa WNA</th>
			</tr>
			<tr>
				<th colspan="1">Ikut Seleksi</th>
				<th colspan="1">Lulus Seleksi</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Transfer</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Trans</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Trans</th>
				<th colspan="1">Min</th>
				<th colspan="1">Rat</th>
				<th colspan="1">Maks</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td style="text-align:center;"><?=$value['tahun_akademik']?></td>
				<td style="text-align:center;"><?=$value['daya_tampung']?></td>
				<td style="text-align:center;"><?=$value['jml_ikut_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_lulus_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_maba']?></td>
				<td style="text-align:center;"><?=$value['jml_maba_transfer']?></td>
				<td style="text-align:center;"><?=$value['jml_total']?></td>
				<td style="text-align:center;"><?=$value['jml_total_transfer']?></td>
				<td style="text-align:center;"><?=$value['jml_lulusan']?></td>
				<td style="text-align:center;"><?=$value['jml_lulusan_transfer']?></td>
				<td style="text-align:center;"><?=$value['ipk_min']?></td>
				<td style="text-align:center;"><?=$value['ipk_rata']?></td>
				<td style="text-align:center;"><?=$value['ipk_max']?></td>
				<td style="text-align:center;"><?=$value['jml_mhs_wna']?></td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>	
		<?php } ?>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/CetakPDFMhsReguler/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
	<?
} else {
	?>
		
	<p>
			3.2 Profil Mahasiswa dan Lulusan
		</p>
		<p>
			3.2.1 Tuliskan data seluruh mahasiswa dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:
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
				<th rowspan="2">Thn Akdmk</th>
				<th rowspan="2">Daya Tmpung</th>
				<th rowspan="1" colspan="2">Jumlah Calon Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
				<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Lulusan</th>
				<th rowspan="1" colspan="3">IPK Lulusan Reguler Mahasiswa Bukan Transfer</th>
				<th rowspan="2" >Jumlah Mahasiswa WNA</th>
			</tr>
			<tr>
				<th colspan="1">Ikut Seleksi</th>
				<th colspan="1">Lulus Seleksi</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Transfer<sup>(3)</sup></th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Trans<sup>(3)</sup></th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Trans<sup>(3)</sup></th>
				<th colspan="1">Min</th>
				<th colspan="1">Rat</th>
				<th colspan="1">Max</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td style="text-align:center;"><?=$value['tahun_akademik']?></td>
				<td style="text-align:center;"><?=$value['daya_tampung']?></td>
				<td style="text-align:center;"><?=$value['jml_ikut_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_lulus_seleksi']?></td>
				<td style="text-align:center;"><?=$value['jml_maba']?></td>
				<td style="text-align:center;"><?=$value['jml_maba_transfer']?></td>
				<td style="text-align:center;"><?=$value['jml_total']?></td>
				<td style="text-align:center;"><?=$value['jml_total_transfer']?></td>
				<td style="text-align:center;"><?=$value['jml_lulusan']?></td>
				<td style="text-align:center;"><?=$value['jml_lulusan_transfer']?></td>
				<td style="text-align:center;"><?=$value['ipk_min']?></td>
				<td style="text-align:center;"><?=$value['ipk_rata']?></td>
				<td style="text-align:center;"><?=$value['ipk_max']?></td>
				<td style="text-align:center;"><?=$value['jml_mhs_wna']?></td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/CetakPDFMhsReguler/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
		
<?
}
?>