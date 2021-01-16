<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 5px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
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

<p class="judul">
	STANDAR 6. PEMBIAYAAN, PRASARANA, SARANA, SERTA SISTEM INFORMASI
</p>

<p>6.1 Pembiayaan</p>
<p>6.1.1  Tuliskan jumlah dana termasuk gaji dan upah yang diterima  di Fakultas/Sekolah Tinggi selama tiga tahun terakhir dengan mengikuti  
format tabel berikut:</p>
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
			<th rowspan="2">Sumber Dana</th>
			<th rowspan="2">Jenis Dana</th>
			<th rowspan="1" colspan="3">Jumlah Dana (Juta Rupiah)</th>
		</tr>
		<tr>
			<th colspasn="1">TS-2</th>
			<th colspasn="1">TS-1</th>
			<th colspasn="1">TS</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
		</tr>
	</thead>
	<tbody>
		<?
		if(isset($data['pt_sendiri'])){
			$i = 0;
			$rowspan = sizeof($data['pt_sendiri']);
			foreach ($data['pt_sendiri'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">PT Sendiri</td>
						<?
					}else{

					}
					?>
					<td><?=$value['jenis_dana']?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS2'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS1'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS'],2,",",".")?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
			<td>PT Sendiri</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($data['yayasan'])){
			$i = 0;
			$rowspan = sizeof($data['yayasan']);
			foreach ($data['yayasan'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">Yayasan</td>
						<?
					}else{

					}
					?>
					<td><?=$value['jenis_dana']?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS2'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS1'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS'],2,",",".")?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
			<td>Yayasan</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($data['diknas'])){
			$i = 0;
			$rowspan = sizeof($data['diknas']);
			foreach ($data['diknas'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">Diknas</td>
						<?
					}else{

					}
					?>
					<td><?=$value['jenis_dana']?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS2'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS1'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS'],2,",",".")?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
			<td>Diknas</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			</tr>
			<?
		}
		?>

		<?
		if(isset($data['lain'])){
			$i = 0;
			$rowspan = sizeof($data['lain']);
			foreach ($data['lain'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">Sumber Lain</td>
						<?
					}else{

					}
					?>
					<td><?=$value['jenis_dana']?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS2'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS1'],2,",",".")?></td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana_TS'],2,",",".")?></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
			<td>Sumber Lain</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			</tr>
			<?
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?php } ?>
<p>Penggunaan dana:</p>
<?php 
if(empty($penggunaan)){
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
			<th rowspan="3" style="width:20px;">No. </th>
			<th rowspan="3">Jenis Penggunaan</th>
			<th rowspan="1" colspan="6">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
		</tr>
		<tr>
			<th rowspan="1" colspan="2">TS-2</th>
			<th rowspan="1" colspan="2">TS-1</th>
			<th rowspan="1" colspan="2">TS</th>
		</tr>
		<tr>
			<th colspan="1">Rp</th>
			<th colspan="1">%</th>
			<th colspan="1">Rp</th>
			<th colspan="1">%</th>
			<th colspan="1">Rp</th>
			<th colspan="1">%</th>	
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
		</tr>
	</thead>
	<tbody>
		<?
		if(isset($penggunaan['pendidikan'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['pendidikan']);
			foreach ($penggunaan['pendidikan'] as $key => $value) {
				$i++;
				?>
				<tr>
					
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">1</td>
						<td rowspan="<?=$rowspan?>">Pendidikan</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">1</td>
				<td>Pendidikan</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['penelitian'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['penelitian']);
			foreach ($penggunaan['penelitian'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">2</td>
						<td rowspan="<?=$rowspan?>">Penelitian</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">2</td>
				<td>Penelitian</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['pkm'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['pkm']);
			foreach ($penggunaan['pkm'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">3</td>
						<td rowspan="<?=$rowspan?>">PKM</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">3</td>
				<td>Pengabdian kepada Masyarakat</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['prasarana'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['prasarana']);
			foreach ($penggunaan['prasarana'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">4</td>
						<td rowspan="<?=$rowspan?>">Prasarana</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">4</td>
				<td>Investasi prasarana</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['sarana'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['sarana']);
			foreach ($penggunaan['sarana'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">5</td>
						<td rowspan="<?=$rowspan?>">Sarana</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">5</td>
				<td>Investasi sarana</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['sdm'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['sdm']);
			foreach ($penggunaan['sdm'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">6</td>
						<td rowspan="<?=$rowspan?>">SDM</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">6</td>
				<td>Investasi SDM</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
		<?
		if(isset($penggunaan['lainnya'])){
			$i = 0;
			$rowspan = sizeof($penggunaan['lainnya']);
			foreach ($penggunaan['lainnya'] as $key => $value) {
				$i++;
				?>
				<tr>
					<?
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>" style="text-align:center">7</td>
						<td rowspan="<?=$rowspan?>">Lainnya</td>
						<?
					}else{

					}
					?>
					<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
					<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
					<td style="text-align:center">-</td>
				</tr>
				<?
			}
		}else{
			?>
			<tr>
				<td style="text-align:center">7</td>
				<td>Lain-lain</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
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
<br>
<?php } ?>
<p>Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi :</p>
<?php 
if(empty($tridarma)){
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
			<th rowspan="2">No.</th>
			<th rowspan="2">Nama Program Studi</th>
			<th rowspan="1" colspan="3">Jumlah Dana (Juta Rupiah)</th>
		</tr>
		<tr>
			<th colspasn="1">TS-2</th>
			<th colspasn="1">TS-1</th>
			<th colspasn="1">TS</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 0;
		foreach ($tridarma as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['jurusan']?></td>
			<td><?=$value['jumlah_dana_TS-2']?></td>
			<td><?=$value['jumlah_dana_TS-1']?></td>
			<td><?=$value['jumlah_dana_TS']?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<?php } ?>
<p>
	6.1.2 Uraikan pendapat pimpinan Fakultas/Sekolah Tinggi  tentang perolehan dana pada butir 6.1.1, 
	yang mencakup aspek: kecukupan dan upaya pengembangannya. Uraikan pula kendala-kendala yang dihadapi 
</p>
<?php 
if(empty($penggunaan['F_pendapat_pimpinan_Fak'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p style="border:1px solid black;padding:5px;">
	<?=$penggunaan['F_pendapat_pimpinan_Fak']?>
</p><br>
<?php } ?>