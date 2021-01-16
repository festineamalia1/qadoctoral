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
	.ket_atas{
		font-size: 12px;
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;s
	}
</style>
	<p>7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir</p>
	<p>7.1.4   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dalam tiga tahun terakhir dengan mengikuti format tabel berikut</p><br>
<?
	if(empty($data)){
		?>
		<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	$Ts0 = 0;
	$Ts1 = 0;
	$Ts2 = 0;
	if(empty($data)) {
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}
	else{
	?>
		<table class="table table-bordered kusus ">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Sumber Dana Kegiatan Penelitian</th>
				<th rowspan="1" colspan="2">Jumlah Penelitian Dalam  Tahun Pelaksanaan</th>
			</tr>
			<tr>
				<th colspan="1">TS-2</th>
				<th colspan="1">TS-1</th>
				<th colspan="1">TS</th>
			</tr>
		</thead>
		<tbody>
			
				<?
				if(isset($data['sendiri'])){
					$i = 0;
					$rowspan = sizeof($data['sendiri']);
					foreach ($data['sendiri'] as $key => $value) {
						$i++;
						$Ts0 += $value['Ts0'];
						$Ts1 += $value['Ts1'];
						$Ts2 += $value['Ts2'];
						?>
						<tr>
						<?
						if($i == 1){
						?>
								<td style="text-align:center"><?=$i?></td>
								<td rowspan="<?=$rowspan?>">Pembiayaan sendiri oleh peneliti</td>
							<?
							}else{
							}
							?>
							<td><?=$value['Ts0']?></td>
							<td><?=$value['Ts1']?></td>
							<td><?=$value['Ts2']?></td>
						</tr>
						<?
					}
				}else{
					?>
					<tr>
						<td style="text-align:center">1</td>
						<td>Pembiayaan sendiri oleh peneliti</td>
						<td style="text-align:center">-</td>
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
					$rowspan = sizeof($data['pt']);
					foreach ($data['pt'] as $key => $value) {
						$i++;
						$Ts0 += $value['Ts0'];
						$Ts1 += $value['Ts1'];
						$Ts2 += $value['Ts2'];
						?>
						<tr>
						<?
						if($i == 1){
								?>
								<td style="text-align:center">2</td>
								<td rowspan="<?=$rowspan?>">PT yang bersangkutan</td>
								<?
							}else{
							}
						?>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
						</tr>
						<?
					}
				}else{


					?>
					<tr>
						<td style="text-align:center">2</td>
						<td>PT yang bersangkutan</td>
						<td style="text-align:center">-</td>
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
					$rowspan = sizeof($data['depdiknas']);
					foreach ($data['depdiknas'] as $key => $value) {
						$i++;
						$Ts0 += $value['Ts0'];
						$Ts1 += $value['Ts1'];
						$Ts2 += $value['Ts2'];
						?>
						<tr>
						<?
						if($i == 1){
								?>
								<td style="text-align:center">3</td>
								<td rowspan="<?=$rowspan?>">Depdiknas</td>
								<?
							}else{
							}
						?>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
						</tr>
						<?
					}
				}else{
					?>
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
					$rowspan = sizeof($data['dlm negeri']);
					foreach ($data['dlm negeri'] as $key => $value) {
						$i++;
						$Ts0 += $value['Ts0'];
						$Ts1 += $value['Ts1'];
						$Ts2 += $value['Ts2'];
						?>
						<tr>
						<?
						if($i == 1){
								?>
								<td style="text-align:center">4</td>
								<td rowspan="<?=$rowspan?>">Institusi dalam negeri di luar Depdiknas</td>
								<?
							}else{
							}
						?>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
						</tr>
						<?
					}
				}else{
					?>
					<tr>
						<td style="text-align:center">4</td>
						<td>Institusi dalam negeri di luar Depdiknas</td>
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
					$rowspan = sizeof($data['luar negeri']);
					foreach ($data['luar negeri'] as $key => $value) {
						$i++;
						$Ts0 += $value['Ts0'];
						$Ts1 += $value['Ts1'];
						$Ts2 += $value['Ts2'];
						?>
						<tr>
						<?
						if($i == 1){
								?>
								<td style="text-align:center">5</td>
								<td rowspan="<?=$rowspan?>">Institusi luar negeri</td>
								<?
							}else{
							}
						?>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
						</tr>
						<?
					}
				}else{
					?>
					<tr>
						<td style="text-align:center">5</td>
						<td>Institusi luar Negeri</td>
						<td style="text-align:center">-</td>
						<td style="text-align:center">-</td>
						<td style="text-align:center">-</td>
					</tr>
					<?
				}
				?>
			</tbody>
		</table>
		<p class="keterangan">
			Catatan : (*) Pelayanan atau Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb).
		</p>
		<?php 
	} ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian_Dosentetap_Ps_S2/CetakPDFpenelitian/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?php } 
?>