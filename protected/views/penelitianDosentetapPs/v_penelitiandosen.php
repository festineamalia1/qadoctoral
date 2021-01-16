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
	.content-field{
		min-height: 900px !important;
	}
</style>
<?
if((empty($penelitian)) && (empty($pkm_penelitian)) && (empty($data))){
?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
<?
} else {
?>

	<?
		if($id_prodi==1) {
	?>
			<p>
					7.1.1 Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing- masing PS di lingkungan Fakultas 
					atau Sekolah Tinggi dalam 3 tahun terakhir dengan mengikuti format tabel berikut :
			</p>

			<table class="table table-bordered min">
				<thead>
					<tr>
						<th rowspan="2" colspan="1">No</th>
						<th rowspan="2" colspan="1">Nama Program Studi</th>
						<th rowspan="1" colspan="3">Jumlah Judul Penelitian</th>
						<th rowspan="1" colspan="3">Total Dana Penelitian (Juta Rp)</th>			
					</tr>
					<tr>
						<th colspan="1">TS-2</th>
						<th colspan="1">TS-1</th>
						<th colspan="1">TS</th>
						<th colspan="1">TS-2</th>
						<th colspan="1">TS-1</th>
						<th colspan="1">TS</th>	
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;

					$tot_judul_TS2=0;
					$tot_judul_TS1=0;
					$tot_judul_TS=0;

					$tot_dana_TS2=0;
					$tot_dana_TS1=0;
					$tot_dana_TS=0;

					foreach ($dana_penelitian as $key => $value) {
					$i++;
					?>
					<tr>
						<td style="text-align:center"><?=$i?></td>
						<td>PS<?=$i?>:<?=$value['jurusan']?></td>
						<td style="text-align:center"><?=$value['TS2_jum_judul']?></td>
						<td style="text-align:center"><?=$value['TS1_jum_judul']?></td>
						<td style="text-align:center"><?=$value['TS_jum_judul']?></td>
						<td><?=$value['TS2_tot_dana']?></td>
						<td><?=$value['TS1_tot_dana']?></td>
						<td><?=$value['TS_tot_dana']?></td>
					</tr>
			

					<?php
						$tot_judul_TS2 +=$value['TS2_jum_judul'];
						$tot_judul_TS1 +=$value['TS1_jum_judul'];
						$tot_judul_TS +=$value['TS_jum_judul'];

						$tot_dana_TS2 +=$value['TS2_tot_dana'];
						$tot_dana_TS1 +=$value['TS1_tot_dana'];
						$tot_dana_TS +=$value['TS_tot_dana'];
					}
					?>
					
				</tbody>
				<tfoot>
						<tr>
							<td></td>
							<td>Total</td>
							<td>na=<?=$tot_judul_TS2?></td>
							<td>nb=<?=$tot_judul_TS1?></td>
							<td>nc=<?=$tot_judul_TS?></td>
							<td>nd=<?=$tot_dana_TS2?></td>
							<td>ne=<?=$tot_dana_TS1?></td>
							<td>nf=<?=$tot_dana_TS?></td>
						</tr>
				</tfoot>
			</table>
			<p class="keterangan">
				Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai kegiatan PS yang relevansinya paling dekat.
			</p>

			<p>
				7.1.2   Uraikan pandangan pimpinan  Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: 
				kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi 
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?
					foreach ($penggunaan as $key => $value) {
				?>
						<?=$value['F_pendapat_pimpinan_Fak']?>
				<?
					}
				?>
			</p>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/PenelitianDosentetapPs/CetakPDFpenelitiandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		} else {
	?>
			<p>
				7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS<br/><br/>
				7.1.1 Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh
				dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan
				mengikuti format tabel berikut:
			</p>

			<table class="table table-bordered min">
				<thead>
					<tr>
						<th>No</th>
						<th>Sumber Dana Kegiatan</th>
						<th>TS-2</th>
						<th>TS-1</th>
						<th>TS</th>
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
				</table>
			<p class="keterangan">
				Catatan: (*) sediakan data pendukung pada saat asesmen lapangan
			</p><br>
				<p>7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?</p><br>
					<div style="margin-left:30px;">
								<label class="checkbox inline">
									<input type="checkbox" id="" value="option2" disabled 
									<?
										foreach ($penelitian as $key => $value) {
									?>
										<?=($value['mhs_terlibat'] == 'tidak ada')? 'checked': ''?>
									<?
										}
									?>
									> Tidak
								</label> <br>
								<label class="checkbox inline">
									<input type="checkbox" id="" value="option2" disabled 
									<?
										foreach ($penelitian as $key => $value) {
									?>
										<?=($value['mhs_terlibat'] == 'ada')? 'checked': ''?>
									<?
										}
									?>
									> Ya
								</label>
						</div><br>
						<div>
							Jika ada, banyaknya  mahasiswa PS yang ikut serta dalam penelitian dosen adalah 
									<?
										foreach ($penelitian as $key => $value) {
									?>
										<?=$value['jum_mhs_penelitian']?>
									<?
										}
									?>  orang, dari
																		<?
										foreach ($penelitian as $key => $value) {
									?>
										<?=$value['jum_mhs_ambil_ta']?>
									<?
										}
									?> mahasiswa yang melakukan tugas akhir melalui skripsi.</p>
						</div>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/PenelitianDosentetapPs/CetakPDFpenelitiandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		}
	?>

<?
	}
?>