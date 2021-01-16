<?php
/* @var $this DaftarisiController */

$this->breadcrumbs=array(
	'Daftar Isi',
);
?>
<style type="text/css">
	table{
		/*font-size: 12px;*/
	}
	table td{
		padding: 5px;
	}
	table.min{
		font-size: 12px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
</style>

<?php
if(!empty($daftar_isi)){
	$halaman = explode(";", $daftar_isi['daftar_isi']);
	// $start_hal = 1;
	// $count_hal = $start_hal;
	$hal = array();
	foreach ($halaman as $key => $value) {
		$a = explode(":", $value);
		$hal[$a[0]] = (isset($a[1])) ? ($a[1]+1) : 0;
	}
	// print_r($hal);
?>
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:30px;">DAFTAR ISI</p>
<table class="" style="margin-top:50px;">
<tbody>
	<tr>
		<td style="width:5%;">STANDAR 1</td>
		<td style="width:50%;">VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</td>
		<td style="text-align:right;width:10%;"><?php echo $hal[1];?></td>
	</tr>
	<tr>
		<td>STANDAR 2</td>
		<td>TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU</td>
		<td style="text-align:right;"><?php echo $hal[2];?></td>
	</tr>
	<tr>
		<td>STANDAR 3</td>
		<td>MAHASISWA DAN LULUSAN</td>
		<td style="text-align:right;"><?php echo $hal[3];?></td>
	</tr>
	<tr>
		<td>STANDAR 4</td>
		<td>SUMBER DAYA MANUSIA</td>
		<td style="text-align:right;"><?php echo $hal[4];?></td>
	</tr>
	<tr>
		<td>STANDAR 5</td>
		<td>KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK</td>
		<td style="text-align:right;"><?php echo $hal[5];?></td>
	</tr>
	<tr>
		<td>STANDAR 6</td>
		<td>PEMBIAYAAN, SARANA DAN PRASARANA, SERTA SISTEM INFORMASI</td>
		<td style="text-align:right;"><?php echo $hal[6];?></td>
	</tr>
	<tr>
		<td>STANDAR 7</td>
		<td>PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA</td>
		<td style="text-align:right;"><?php echo $hal[7];?></td>
	</tr>
</tbody>
</table>



<!-- tombol cetak -->
<div class="row-fluid" style="margin-top:100px !important;margin-bottom:20px;">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/daftarisi/cetakpdf/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary">
			<i class="icon-print icon-white"></i> 
			Cetak Daftar Isi
		</a>
	</div>
</div>
<?php
}else{
	?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
	<?php
}
?>