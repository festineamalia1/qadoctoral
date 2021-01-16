<style type="text/css">
	table{
		font-size: 20px;
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

<p>
	3.2 Profil Mahasiswa dan Lulusan
</p>
<p>
	3.2.1 Tuliskan data <b>seluruh</b> mahasiswa dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:
</p>

<?php
if (empty($data)) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
	<?
} else {
	?>
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th rowspan="2">Tahun Akademik</th>
				<th rowspan="2">Daya Tampung</th>
				<th rowspan="1" colspan="2">Jumlah Calon Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
				<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Lulusan</th>
				<th rowspan="1" colspan="3">IPK Lulusan Mahasiswa Bukan Transfer</th>
				<th rowspan="2">Jumlah Mahasiswa WNA</th>
			</tr>
			<tr>
				<th colspan="1">Ikut Seleksi</th>
				<th colspan="1">Lulus Seleksi</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Transfer</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Transfer</th>
				<th colspan="1">Bukan Trasnfer</th>
				<th colspan="1">Transfer</th>
				<th colspan="1">Min</th>
				<th colspan="1">Rata2</th>
				<th colspan="1">Mak</th>
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
				<td style="text-align:center;"><?=$value['jml_lolos_seleksi']?></td>
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
		<?
			$jumlah=0;
			$jmlIpkRata=0;

			$jml_dayaTampung=0;
			$jml_ikut=0;
			$jml_lolos=0;
			$jml_maba=0;
			$jml_mabaTr=0;
			$jml_total=0;
			$jml_totalTr=0;
			$jml_lulusan=0;
			$jml_lulusanTr=0;
			$lama_studi=0;
			$i=0;
			
		
		 foreach ($data as $key => $value) {
		 	$jml_dayaTampung+=$value['daya_tampung'];
		 	$jml_ikut+=$value['jml_ikut_seleksi'];
		 	$jml_lolos+=$value['jml_lolos_seleksi'];
		 	$jml_maba+=$value['jml_maba'];
		 	$jml_mabaTr+=$value['jml_maba_transfer'];
		 	$jml_total+=$value['jml_total'];
		 	$jml_totalTr+=$value['jml_total_transfer'];
		 	$jml_lulusan+=$value['jml_lulusan'];
		 	$jml_lulusanTr+=$value['jml_lulusan_transfer'];
		 	$lama_studi+=$value['rata_lama_studi'];
		 	$i++;

		 	$A=$value['jml_lulusan'];
		 	$B=$value['ipk_rata'];
		 	$jmlIpkRata+=$B;
		 	$kali=$A*$B;
		 	$jumlah+=$kali;
		 }
		 $rata=$jumlah/$jmlIpkRata;
		 $rata_studi=$lama_studi/$i;
		?>
		<tr>
			<td  style="text-align:center;">Jumlah</td>
			<td  style="text-align:center;"><?=$jml_dayaTampung?></td>
			<td  style="text-align:center;"><?=$jml_ikut?></td>
			<td  style="text-align:center;"><?=$jml_lolos?></td>
			<td  style="text-align:center;"><?=$jml_maba?></td>
			<td  style="text-align:center;"><?=$jml_mabaTr?></td>
			<td  style="text-align:center;"><?=$jml_total?></td>
			<td  style="text-align:center;"><?=$jml_totalTr?></td>
			<td  style="text-align:center;"><?=$jml_lulusan?></td>
			<td  style="text-align:center;"><?=$jml_lulusanTr?></td>
			<td style="background:grey"></td>
			<td style="background:grey"></td>
			<td style="background:grey"></td>
			<td style="background:grey"></td>
		</tr>
		<tr>
			<td colspan ="14"><p style="font-size:15px;"> Rata-rata IPK untuk lulusan lima tahun terakhir = <?=$rata?></p></td>
		</tr>
		<tr>
			<td colspan="14"><p style="font-size:15px;">Rata-rata lama studi untuk lulusan lima tahun terakhir = <?=$rata_studi?> Tahun</p></td>
		</tr>
		</tfoot>
	</table>
	<p class="keterangan">
		Catatan: <br>
		  TS:Tahun akademik penuh terakhir saat pengisian borang <br>
		  Mahasiswa <b>transfer</b> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, 
   baik dari dalam PT maupun luar PT.<br>
		  Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum <br>

	</p>
<?php } ?>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/rekruitmenMaba/CetakPDF_Profil/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>