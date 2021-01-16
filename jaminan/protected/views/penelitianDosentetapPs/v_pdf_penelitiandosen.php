<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 5px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-weight: bold;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
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
7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS<br/><br/>
7.1.1 Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh
dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan
mengikuti format tabel berikut:
</p>
<?
if((empty($data))){
?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
<?
} else {
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Sumber Dana Kegiatan</th>
			<th colspasn="1"><?php echo ($tahun['th_akademik'] - 2);?></th>
			<th colspasn="1"><?php echo ($tahun['th_akademik'] - 1);?></th>
			<th colspasn="1"><?php echo $tahun['th_akademik'];?></th>
		</tr>
		<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
			<th>(5)</th>
		</tr>
	</thead>

	<tbody>
		<?
		if(isset($data['sendiri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['sendiri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center"><?=$i?></td>
						<td rowspan="<?=$rowspan?>">Pembiayaan sendiri oleh peneliti</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
				?>
					<td style="text-align:center"><?=$value['waktu_TS2']?></td>
					<td style="text-align:center"><?=$value['waktu_TS1']?></td>
					<td style="text-align:center"><?=$value['waktu_TS']?></td>
				</tr>
				<?
			}
		} else { ?>
		<tr>
			<td style="text-align:center">1</td>
			<td>Pembiayaan sendiri oleh peneliti</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
		</tr>
		<?
		}
		?>

		<?
		if(isset($data['pt'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['pt'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">2</td>
						<td rowspan="<?=$rowspan?>">PT yang bersangkutan</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
				?>
					<td style="text-align:center"><?=$value['waktu_TS2']?></td>
					<td style="text-align:center"><?=$value['waktu_TS1']?></td>
					<td style="text-align:center"><?=$value['waktu_TS']?></td>
				</tr>
				<?
			}
		}  else { ?>
		<tr>
			<td style="text-align:center">2</td>
			<td>PT yang bersangkutan</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
		</tr>
		<?
		}
		?>

		<?
		if(isset($data['depdiknas'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['depdiknas'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">3</td>
						<td rowspan="<?=$rowspan?>">Depdiknas</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
				?>
					<td style="text-align:center"><?=$value['waktu_TS2']?></td>
					<td style="text-align:center"><?=$value['waktu_TS1']?></td>
					<td style="text-align:center"><?=$value['waktu_TS']?></td>
				</tr>
				<?
			}
		}  else { ?>
		<tr>
			<td style="text-align:center">3</td>
			<td>Depdiknas</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
		</tr>
		<?
		}
		?>
		

		<?
		if(isset($data['dlm negeri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['dlm negeri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">4</td>
						<td rowspan="<?=$rowspan?>">Institusi dalam negeri di luar Depdiknas</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
				?>
					<td style="text-align:center"><?=$value['waktu_TS2']?></td>
					<td style="text-align:center"><?=$value['waktu_TS1']?></td>
					<td style="text-align:center"><?=$value['waktu_TS']?></td>
				</tr>
				<?
			}
		}  else { ?>
		<tr>
			<td style="text-align:center">4</td>
			<td>Institusi dalam negeri diluar Depdiknas</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
		</tr>
		<?
		}
		?>
		

		<?
		if(isset($data['luar negeri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['luar negeri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">5</td>
						<td rowspan="<?=$rowspan?>">Institusi luar negeri</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
				?>
					<td style="text-align:center"><?=$value['waktu_TS2']?></td>
					<td style="text-align:center"><?=$value['waktu_TS1']?></td>
					<td style="text-align:center"><?=$value['waktu_TS']?></td>
				</tr>
				<?
			}
		}  else { ?>
		<tr>
			<td style="text-align:center">5</td>
			<td>Institusi luar negeri</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
			<td style="text-align:center">-</td>
		</tr>
		<?
		}
		?>								
	</tbody>

	<tfoot>
	</tfoot>
</table>
<p class="keterangan">
Catatan: (*) sediakan data pendukung pada saat asesmen lapangan
</p>
<?php } ?>
<p>7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?</p>
<div style="margin-left:30px;">
	<?
		$checked = '';
		foreach ($penelitian as $key => $value) {
			if($value['mhs_terlibat'] == 'ada'){
				$checked = 'checked';
			}
		}
		$checked2 = '';
		if($checked == 'checked'){
			$checked2 = '';
		}else{
			$checked2 = 'checked';
		}
	?>
	<label class="checkbox inline">
		<?php
		if($checked2 == 'checked'){
			?>
			<!-- <span style="width:15px;height:15px;border:1px solid black;"> -->
				<img style="max-width:15px;" src="<?php echo Yii::app()->baseUrl;?>/images/centang.png">
			<!-- </span> -->
			<?
		}else{
			?>
			<!-- <span style="width:15px;height:15px;border:1px solid black;"> -->
				<img style="max-width:15px;" src="<?php echo Yii::app()->baseUrl;?>/images/kotak.png">
			<!-- </span> -->
			<?
		}
		?> Tidak
	</label> <br>
	<label class="checkbox inline">
		<?php
		if($checked == 'checked'){
			?>
			<!-- <span style="width:20px;height:15px;border:1px solid black;"> -->
				<img style="max-width:15px;" src="<?php echo Yii::app()->baseUrl;?>/images/centang.png">
			<!-- </span> -->
			<?
		}else{
			?>
			<!-- <span style="width:15px;height:15px;border:1px solid black;"> -->
				<img style="max-width:15px;" src="<?php echo Yii::app()->baseUrl;?>/images/kotak.png">
			<!-- </span> -->
			<?
		}
		?> Ya
	</label>
</div>
Jika ada, banyaknya  mahasiswa PS yang ikut serta dalam penelitian dosen adalah 
<?	
echo $mhs_penelitian;
?>  
orang, dari					
<?
echo $mhs_ta;
?> mahasiswa yang melakukan tugas akhir melalui skripsi.</p>