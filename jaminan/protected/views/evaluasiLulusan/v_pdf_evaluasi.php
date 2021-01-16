<style type="text/css">
		table{
		border-collapse: collapse;
		width: 150%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
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
		margin-bottom: 50px;
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
<p>3.3 Evaluasi Lulusan</p>
<p>3.3.1 Evalusi Kinerja Lulusan oleh Pihak Pengguna Lulusan</p>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
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
<?
}
?>
<p>3.3.2 Hasil studi pelacakan dirangkum dalam tabel berikut:</p>
<p style="padding-left:30px">Nyatakan angka persentasenya dalam (*) pada kolom yang sesuai.</p>
<table class="table table-bordered min">
	<tr>
		<th rowspan="3" colspan="1">No</th>	
		<th rowspan="3" colspan="1">Jenis Kemampuan</th>
		<th rowspan="1" colspan="4">Tanggapan pihak pengguna</th>
		<th rowspan="3" colspan="1">Pemanfaatan hasil studi</th>
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
				<td><?=$value['pemanfaatan_hs']?></td>
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
				<td><?=$value['pemanfaatan_hs']?></td>
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
	if(isset($pelacakan['wawasan'])){
		$rowspan = sizeof($pelacakan['wawasan']);
		foreach ($pelacakan['wawasan'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">3</td>
				<td rowspan="<?=$rowspan?>">Keluasan wawasan antar disiplin ilmu</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">3</td>
			<td >Keluasan wawasan antar disiplin ilmu</td>
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
	if(isset($pelacakan['kepemimpinan'])){
		$rowspan = sizeof($pelacakan['kepemimpinan']);
		foreach ($pelacakan['kepemimpinan'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">4</td>
				<td rowspan="<?=$rowspan?>">Kepemimpinan</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">4</td>
			<td >Kepemimpinan</td>
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
				<td style="text-align:center;" rowspan="<?=$rowspan?>">5</td>
				<td rowspan="<?=$rowspan?>">Bahasa Asing</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">5</td>
			<td >Bahasa Asing</td>
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
				<td style="text-align:center;" rowspan="<?=$rowspan?>">6</td>
				<td rowspan="<?=$rowspan?>">Penggunaan Tegnologi Informasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">6</td>
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
				<td style="text-align:center;" rowspan="<?=$rowspan?>">7</td>
				<td rowspan="<?=$rowspan?>">Komunikasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">7</td>
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
				<td style="text-align:center;" rowspan="<?=$rowspan?>">8</td>
				<td rowspan="<?=$rowspan?>">Kerjasama Tim</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">8</td>
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
				<td style="text-align:center;" rowspan="<?=$rowspan?>">9</td>
				<td rowspan="<?=$rowspan?>">Pengembangan Diri</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hs']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">9</td>
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
	Catatan :  Sediakan dokumen pendukung pada saat asesmen lapangan <br>
	<p class="keterangan" style="padding-left:37px">
	(*) persentase tanggapan pihak pengguna pada peringkat = [(jumlah tanggapan pada peringkat) : (jumlah tanggapan yang ada)] x 100
</p>