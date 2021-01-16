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
<?
if($id_prodi==1) {

	$jumlah_dana_TS2 = 0;
	$jumlah_dana_TS1 = 0;
	$jumlah_dana_TS = 0;
	?>
	
	

	
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
		<br>
		</table>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFperolehan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
<?



                                                                       } else {


?>



	
	<p>6.1.2.1 Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji, selama
	tiga tahun terakhir, pada tabel berikut :</p>
	<?php
	if(empty($data)) {
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
				<th rowspan="1" colspan="3">Jumlah Dana</th>
			</tr>
			<tr>
				<th colspasn="1"><?php echo ($tahun['th_akademik'] - 2);?></th>
				<th colspasn="1"><?php echo ($tahun['th_akademik'] - 1);?></th>
				<th colspasn="1"><?php echo $tahun['th_akademik'];?></th>
			</tr>
		</thead>
		<tbody>
			<?
			$jumlah_dana_TS2 = 0;
			$jumlah_dana_TS1 = 0;
			$jumlah_dana_TS  = 0;
			if(isset($data['pt_sendiri'])){
				$i = 0;
				$rowspan = sizeof($data['pt_sendiri']);
				foreach ($data['pt_sendiri'] as $key => $value) {
					$i++;
					$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
					$jumlah_dana_TS1 += $value['jumlah_dana_TS1'];
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
					$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
					$jumlah_dana_TS1 += $value['jumlah_dana_TS1'];
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
					$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
					$jumlah_dana_TS1 += $value['jumlah_dana_TS1'];
					$jumlah_dana_TS += $value['jumlah_dana_TS'];
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
					$jumlah_dana_TS2 += $value['jumlah_dana_TS2'];
					$jumlah_dana_TS1 += $value['jumlah_dana_TS1'];
					$jumlah_dana_TS += $value['jumlah_dana_TS'];
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
			<tr>
			<th colspan="2">Total</th>
			<th style="text-align:right;"><?=number_format($jumlah_dana_TS2,2,",",".")?></th>
			<th style="text-align:right;"><?=number_format($jumlah_dana_TS1,2,",",".")?></th>
			<th style="text-align:right;"><?=number_format($jumlah_dana_TS,2,",",".")?></th>
			</tr>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<br> 
	
	

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
			<th>(3)</th>
			<th>(2)</th>
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


	<br>
	<p>6.1.2.3 Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti
	 format tabel berikut :</p>
	 <?php
	if(empty($dana)) {
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
				<th>Tahun</th>
				<th>Judul Penelitian</th>
				<th>Nama Dosen</th>
				<th>Sumber dan Jenis Dana</th>
				<th>Jumlah Dana (Dalam Rupiah)</th>
			</tr>
		</thead>
		<tbody>
			<?
			$i=0;
			$jumlah_dana = 0;
			
			foreach ($dana as $key => $value) {
			$jumlah_dana += $value['jumlah_dana'];
			
			$i++;
			
			?>
			<tr>
				<td style="text-align:center"><?=$value['th_publikasi']?></td>
				<td><?=$value['judul']?></td>
				<td><?=$value['nama_dosen']?></td>				
				<td><?=$value['sumber_dana']?>, <?=$value['jenis_dana']?> </td>
				<td style="text-align:right;"><?=number_format($value['jumlah_dana'],2,",",".")?></td>
			</tr>
			<?
			}
			?>
			<tr>
				<th colspan="4">Total</th>
				<th><?=number_format($jumlah_dana,2,",",".")?></th>
			</tr>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		*Di luar dana penelitian/penulisan skripsi, tesis, disertasi sebagai bagian dari studi lanjut.
	</p>
	<?php } ?>


	<br>
	<p>6.2.4 Tuliskan dana untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti
	 format tabel berikut :</p>
	 <?php
	if(empty($dana_pkm)) {
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
				<th>Tahun</th>
				<th>Judul Kegiatan Pelayanan/Pengabdian</th>
				<th>Sumber dan Jenis Dana</th>
				<th>Jumlah Dana (Dalam Rupiah)</th>
			</tr>
		</thead>
		<tbody>
		<?
			$jumlah_dana = 0;
			foreach ($dana_pkm as $key => $value) {
				$jumlah_dana += $value['jumlah_dana'];
			?>
				<tr>
					<td style="text-align:center"><?=$value['th_publikasi']?></td>
					<td><?=$value['judul']?></td>
					<td><?=$value['sumber_dana']?>,<?=$value['jenis_dana']?> </td>
					<td style="text-align:right;"><?=number_format($value['jumlah_dana'],2,",",".")?></td>
				</tr>
			<?
			}
		?>
			<tr>
				<th colspan="3">Total</th>
				<th style="text-align:right;"><?=number_format($jumlah_dana,2,",",".")?></th>
			</tr>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	
	
	
	
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFperolehan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
}
?>
