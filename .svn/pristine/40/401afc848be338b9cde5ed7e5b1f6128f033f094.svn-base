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
<p>3.3.2 Hasil studi pelacakan dirangkum dalam tabel berikut:</p>
<p style="padding-left:30px">
	Nyatakan angka persentasenya dalam (*) pada kolom yang sesuai.
</p>
<table class="table table-bordered min">
	<tr>
		<th rowspan="3" colspan="1">No</th>	
		<th rowspan="3" colspan="1">Jenis Kemampuan</th>
		<th rowspan="1" colspan="4">Tanggapan pihak pengguna</th>
		<th rowspan="3" colspan="1">Pemanfaatan Hasil Pelacakan</th>
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
	if(isset($data['pengembangan'])){
		$rowspan = sizeof($data['pengembangan']);
		foreach ($data['pengembangan'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">1</td>
				<td rowspan="<?=$rowspan?>">Pengembangan Diri</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">1</td>
			<td >Pengembangan diri</td>
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
	if(isset($data['kerjasama'])){
		$rowspan = sizeof($data['kerjasama']);
		foreach ($data['kerjasama'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Kerjasama dalam Tim</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
			<td >Kerjasama dalam Tim</td>
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
	if(isset($data['komunikasi'])){
		$rowspan = sizeof($data['komunikasi']);
		foreach ($data['komunikasi'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Komunikasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
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
	if(isset($data['teknologi'])){
		$rowspan = sizeof($data['teknologi']);
		foreach ($data['teknologi'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Penggunaan Teknologi Informasi</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
			<td >Penggunaan Teknologi Informasi</td>
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
	if(isset($data['BAsing'])){
		$rowspan = sizeof($data['BAsing']);
		foreach ($data['BAsing'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Bahasa asing</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
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
	if(isset($data['profesionalisme'])){
		$rowspan = sizeof($data['profesionalisme']);
		foreach ($data['profesionalisme'] as $key => $value) {
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
				<td><?=$value['pemanfaatan_hsp']?></td>
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
	if(isset($data['etikamoral'])){
		$rowspan = sizeof($data['etikamoral']);
		foreach ($data['etikamoral'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Integritas (etika dan moral)</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
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
	if(isset($data['wawasan_disiplin'])){
		$rowspan = sizeof($data['wawasan_disiplin']);
		foreach ($data['wawasan_disiplin'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Keluasan wawasan antar disiplin ilmu</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
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
	if(isset($data['kepemimpinan'])){
		$rowspan = sizeof($data['kepemimpinan']);
		foreach ($data['kepemimpinan'] as $key => $value) {
			$i++;
			?>
			<tr>
			<?
			if($i == 1){
				?>
				<td style="text-align:center;" rowspan="<?=$rowspan?>">2</td>
				<td rowspan="<?=$rowspan?>">Kepemimpinan</td>
				<?
			}
			?>
				<td style="text-align:center;"><?=$value['tanggap_baik']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_kurang']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_cukup']?> %</td>
				<td style="text-align:center;"><?=$value['tanggap_sangat_baik']?> %</td>
				<td><?=$value['pemanfaatan_hsp']?></td>
			</tr>
			<?
		}
	}else{
		?>
		<tr>
			<td style="text-align:center;">2</td>
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
</table>
<p class="keterangan">
	Catatan : Sediakan dokumen pendukung pada saat asesmen lapangan<br>
	<p class="keterangan" style="padding-left:37px">
	(*) persentase tanggapan pihak pengguna=[(jumlah tanggapan pada peringkat):(jumlah tanggapan yang ada)]x 100</p>
</p>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/evaluasilulusan/CetakPDFevaluasi/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>

<?
}
?>