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

<p>6.1.2.1  Tuliskan jumlah dana termasuk gaji dan upah yang diterima  di Fakultas/Sekolah Tinggi selama tiga tahun terakhir dengan mengikuti  
	format tabel berikut:</p>
	<?php
	if(empty($data)) {
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}
	else{
	?>
		<table class="table table-bordered kusus">
			<thead>
				<tr>
					<th rowspan="2">Sumber Dana</th>
					<th rowspan="2">Jenis Dana</th>
					<th rowspan="1" colspan="3">Jumlah Dana (Juta Rupiah)</th>
				</tr>
				<tr>
					<th colspasn="1"><?php echo ($tahun['th_akademik'] - 2);?></th>
				<th colspasn="1"><?php echo ($tahun['th_akademik'] - 1);?></th>
				<th colspasn="1"><?php echo $tahun['th_akademik'];?></th>
				</tr>
			</thead>
			<tbody>
				<?
				if(isset($data['pt_sendiri'])){
					$i = 0;
					$rowspan = sizeof($data['pt_sendiri']);
					foreach ($data['pt_sendiri'] as $key => $value) {
						$i++;
						$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
						$jumlah_dana_TS1 += $value['jumlah_dana_TS'];
						$jumlah_dana_TS += $value['jumlah_dana_TS'];
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
							<td><?=$value['jumlah_dana_TS2']?></td>
							<td><?=$value['jumlah_dana_TS1']?></td>
							<td><?=$value['jumlah_dana_TS']?></td>
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
						$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
						$jumlah_dana_TS1 += $value['jumlah_dana_TS'];
						$jumlah_dana_TS += $value['jumlah_dana_TS'];
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
							<td><?=$value['jumlah_dana_TS2']?></td>
							<td><?=$value['jumlah_dana_TS1']?></td>
							<td><?=$value['jumlah_dana_TS']?></td>
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
				
			</tbody>
			<tfoot>

			</tfoot>
		</table>

		<?php } ?>
		

		
		
		<p>
			6.1.2.2 Jumlah mahasiswa dan dana operasional program studi dalam tiga tahun terakhir.

		</p>
		<?php
		if(empty($operasional) ) {
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
			<th colspan="3">Jumlah Dana Operasional (Juta Rupiah)</th>
		</tr>
		<tr>
			<th>TS 2</th>
			<th>TS 1</th>
			<th>TS</th>
		</tr>
			<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
		</tr>

		</thead>
		<tbody>
		
		<?php
			$TS2 = 0;
			$TS1 = 0;
			$TS = 0;
			


		
		
			foreach ($operasional as $key => $value) {
			$TS2 += $value['TS2'];
			$TS1 += $value['TS1'];
				$TS += $value['TS'];
			
			
		

			?>
			
				
			<tr>
				<th><?=$value['TS2']?></th>
				<th><?=$value['TS1']?></th>
				<th><?=$value['TS']?></th>
				
				
			</tr>

		
				

			
		</tbody>

		</table>
		<?
	}
		?>

		<?php } ?>

		
		<p>
			6.1.2.3 Uraikan pendapat pimpinan Fakultas/Sekolah Tinggi  tentang perolehan dana pada butir 6.2.1, 
			yang mencakup aspek: kecukupan dan upaya pengembangannya. Uraikan pula kendala-kendala yang dihadapi 
		</p>
		<?php
			if(empty($data['F_pendapat_pimpinan_Fak']) ) {
				?>
					<div class="alert alert-error">
				 	Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
					</div>
				<?
			}
			else{
				?>
					<p style="border:1px solid black;padding:5px;">
				<?
					foreach ($data as $key => $value) {
				?>
				<?//=$value['F_pendapat_pimpinan_Fak']?>
			<?php 
			} 
			?>
			
		</p>
		<?php } ?>
		