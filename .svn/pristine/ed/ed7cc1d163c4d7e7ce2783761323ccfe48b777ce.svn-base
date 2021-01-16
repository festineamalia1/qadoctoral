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
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>

<p>3.3.1 Evalusi Kinerja Lulusan oleh Pihak Pengguna Lulusan</p>
<p style="padding-left:30px">Adakah studi pelacakan <i>(tracer study)</i> untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna?</p>
<div style="margin-left:30px;">
	<label class="checkbox inline">
	  <input type="checkbox" id="" value="option2" disabled <?=($data['studi_pelacakan'] == 'tidak ada')? 'checked': ''?>> Tidak ada
	</label> <br>
	<label class="checkbox inline">
	  <input type="checkbox" id="" value="option1" disabled <?=($data['studi_pelacakan'] == 'ada')? 'checked': ''?>> ada
	</label>
</div>
<p style="padding-left:30px">
	Jika ada, uraikan metode, proses dan mekanisme kegiatan studi pelacakan tersebut.  Jelaskan pula bentuk tindak lanjut dari hasil kegiatan ini.
</p>
<p style="border:1px solid black;padding:5px;">
	1. Metode : <?=$data['metode']?><br>
	2. Proses : <?=$data['proses']?><br>
	3. Mekanisme : <?=$data['mekanisme_kegiatan']?><br>
	4. Tindak Lanjut : <?=$data['tindak_lanjut']?><br>
	4. Hasil : <?=$data['hasil']?><br>
</p>
<p style="padding-left:30px">
	Hasil studi pelacakan dirangkum dalam tabel berikut:<br>
	Nyatakan angka persentasenya dalam (*) pada kolom yang sesuai.
</p>
<table class="table table-bordered min">
	<tr>
		<th rowspan="3" colspan="1">No</th>	
		<th rowspan="3" colspan="1">Jenis Kemampuan</th>
		<th rowspan="1" colspan="4">Tanggapan pihak pengguna</th>
		<th rowspan="3" colspan="1">Rencana Tindak Lanjut oleh Program Studi</th>
	</tr>
	<tr>
		<th colspan="1">Sangat Baik</th>
		<th colspan="1">Baik</th>	
		<th colspan="1">Cukup</th>
		<th colspan="1">Kurang</th>	
	</tr>
	<tr>
		<th colspan="1">%</th>
		<th colspan="1">%</th>
		<th colspan="1">%</th>
		<th colspan="1">%</th>
	</tr>
	<?
	$i = 0;
	if(isset($pelacakan['integritas'])){
		$rowspan = sizeof($pelacakan['integritas']);
		foreach ($pelacakan['integritas'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">1</td>
				<td rowspan="<?=$rowspan?>">Integritas (etika dan moral)</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">1</td>
			<td >Integritas (etika dan moral)</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['keahlian'])){
		$rowspan = sizeof($pelacakan['keahlian']);
		foreach ($pelacakan['keahlian'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
			<td >Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['bahasa'])){
		$rowspan = sizeof($pelacakan['bahasa']);
		foreach ($pelacakan['bahasa'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">3</td>
				<td rowspan="<?=$rowspan?>">Bahasa Inggris</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">3</td>
			<td >Bahasa Inggris</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['TI'])){
		$rowspan = sizeof($pelacakan['TI']);
		foreach ($pelacakan['TI'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">4</td>
				<td rowspan="<?=$rowspan?>">Penggunaan Tegnologi Informasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">4</td>
			<td >Penggunaan Tegnologi Informasi</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['komunikasi'])){
		$rowspan = sizeof($pelacakan['komunikasi']);
		foreach ($pelacakan['komunikasi'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">5</td>
				<td rowspan="<?=$rowspan?>">Komunikasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">5</td>
			<td >Komunikasi</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['kerjasama'])){
		$rowspan = sizeof($pelacakan['kerjasama']);
		foreach ($pelacakan['kerjasama'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">6</td>
				<td rowspan="<?=$rowspan?>">Kerjasama Tim</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">6</td>
			<td >Kerjasama Tim</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
	<?
	$i = 0;
	if(isset($pelacakan['pengembangan_diri'])){
		$rowspan = sizeof($pelacakan['pengembangan_diri']);
		foreach ($pelacakan['pengembangan_diri'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">7</td>
				<td rowspan="<?=$rowspan?>">Pengembangan Diri</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['rencana_tindak_lanjut']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">7</td>
			<td >Pengembangan Diri</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
			<td style="text-align:center;">-</td>
		</tr>
		<?
	}
	?>
</table>
<p class="keterangan">
	Catatan : Sediakan dokumen pendukung pada saat asesmen lapangan<br>
	<p class="keterangan" style="padding-left:37px">
	(*) persentase tanggapan pihak pengguna=[(jumlah tanggapan pada peringkat):(jumlah tanggapan yang ada)]x 100</p>
</p>
<p>3.3.2  Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = <b><?=(isset($tracer['rata2_wkt_tunggu'])? $tracer['rata2_wkt_tunggu'] : '')?> </b> bulan</p>
<p>3.3.3  Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya = <b><?=(isset($tracer['rata2_wkt_tunggu'])? $tracer['rata2_wkt_tunggu'] : '')?> %</b> </p>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/evaluasilulusan/CetakPDFevaluasi/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>