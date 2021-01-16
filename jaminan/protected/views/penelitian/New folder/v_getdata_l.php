<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 11px;
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
		text-justify:inter-world;
	}
</style>

<?
if($id_prodi==1) {
?>

		<p>
			
			7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir

		</p>
		<p>
			7.1.4   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dalam lima tahun terakhir dengan mengikuti format tabel berikut:
		</p>
		<table class="table table-bordered min">
			<thead>
				<tr>
					<th rowspan="2" colspan="1">No.</th>
					<th rowspan="2" colspan="1">Nama Program Studi</th>
					<th rowspan="1" colspan="3">Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
					<th rowspan="1" colspan="3">Jumlah Penelitian Selama Lima Tahun</th>
				</tr>
				<tr>
					<th colspan="1">TS-4</th>
					<th colspan="1">TS-3</th>
					<th colspan="1">TS-2</th>
					<th colspan="1">TS-1</th>
					<th colspan="1">TS</th>
					<th colspan="1">TS-4</th>
					<th colspan="1">TS-3</th>
					<th colspan="1">TS-2</th>
					<th colspan="1">TS-1</th>
					<th colspan="1">TS</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$tot_judul_TS4=0;
				$tot_judul_TS3=0;
				$tot_judul_TS2=0;
				$tot_judul_TS1=0;
				$tot_judul_TS=0;

				$tot_dana_TS4=0;
				$tot_dana_TS3=0;
				$tot_dana_TS2=0;
				$tot_dana_TS1=0;
				$tot_dana_TS=0;

				// foreach ($pkm_dana_penelitian as $key => $value) {
				// $i++;
				?>
			
				<?php
				
				?>
				
			</tbody>
		
		</table>
		<p class="keterangan">
			Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih agar dicatat sebagai kegiatan PS yang relevansinya paling dekat.
		</p>
		<p> 
			7.2.2 Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: 
			kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.
		</p>
		

		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFpkm/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>

<?
} else {
?>
		<p>
			7.2   Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM)
		</p>
		<p>7.2.1 Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai
		dengan bidang keilmuan PS selama lima tahun terakhir yang dilakukan oleh dosen tetap
		yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut :</p><br>
		<?php
		if(empty($data)){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<table class="table table-bordered min">
			<thead>
				<tr>
					<th>No</th>
					<th>Sumber Dana Kegiatan</th>
					<th>TS-4</th>
					<th>TS-3</th>
					<th>TS-2</th>
					<th>TS-1</th>
					<th>TS</th>
					<th>Jumlah Kegiatan</th>
				</tr>
			</thead>
			<tbody>
			
				<?
				//echo '<pre>'; print_r($data); exit;
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
								<td >Pembiayaan sendiri oleh peneliti</td>
							<?
							}else{
							?>
								<td></td>
								<td></td>
							<?
							
							}
							$jumlah=$value['Ts4']+$value['Ts3']+$value['Ts2']+$value['Ts1']+$value['Ts0'];
							?>
							<td style="text-align:center"><?=$value['Ts4']?></td>
							<td style="text-align:center"><?=$value['Ts3']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
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
					</tr>
					<?
				}
				?>

				<?
				//exit;
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
								<td >PT yang bersangkutan</td>
								<?
							}else{
								?>
								<td></td>
								<td></td>
								<?
							}
							$jumlah=$value['Ts4']+$value['Ts3']+$value['Ts2']+$value['Ts1']+$value['Ts0'];
						?>	
							<td style="text-align:center"><?=$value['Ts4']?></td>
							<td style="text-align:center"><?=$value['Ts3']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
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
								<td >Depdiknas</td>
								<?
							}else{
								?>
								<td></td>
								<td></td>
								<?
							}
							$jumlah=$value['Ts4']+$value['Ts3']+$value['Ts2']+$value['Ts1']+$value['Ts0'];
						?>	
							<td style="text-align:center"><?=$value['Ts4']?></td>
							<td style="text-align:center"><?=$value['Ts3']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
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
					$rowspan = 0;
					foreach ($data['dlm negeri'] as $key => $value) {
						?>
						<tr>
						<?
						$i++;
						if($i == 1){
								?>
								<td style="text-align:center">4</td>
								<td >Institusi dalam negeri di luar Depdiknas</td>
								<?
							}else{
								?>
								<td></td>
								<td></td>
								<?
							}
						$jumlah=$value['Ts4']+$value['Ts3']+$value['Ts2']+$value['Ts1']+$value['Ts0'];
						?>	
							<td style="text-align:center"><?=$value['Ts4']?></td>
							<td style="text-align:center"><?=$value['Ts3']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
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
					$rowspan = 0;
					foreach ($data['luar negeri'] as $key => $value) {
						?>
						<tr>
						<?
						$i++;
						if($i == 1){
								?>
								<td style="text-align:center">5</td>
								<td >Institusi luar negeri</td>
								<?
							}else{
								?>
								<td></td>
								<td></td>
								<?
							}
							$jumlah=$value['Ts4']+$value['Ts3']+$value['Ts2']+$value['Ts1']+$value['Ts0'];
						?>	
							<td style="text-align:center"><?=$value['Ts4']?></td>
							<td style="text-align:center"><?=$value['Ts3']?></td>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
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
		<?php } ?>
	
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFpkm/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
<?
}
?>