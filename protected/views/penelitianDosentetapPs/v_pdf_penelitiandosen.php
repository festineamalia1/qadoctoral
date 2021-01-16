<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
		padding: 5px;
	}
	table tr td{
		border: thin solid black;
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
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA 
	<p class="judul" style="padding-left:106px">MASYARAKAT, DAN KERJASAMA
</p>

			<p>
			7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS<br/><br/>
			7.1.1 Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh
			dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan
			mengikuti format tabel berikut:
			</p>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Sumber Dana Kegiatan</th>
						<th>TS-2</th>
						<th>TS-1</th>
						<th>TS</th>
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
				<p>7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?</p>
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
						</div>
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